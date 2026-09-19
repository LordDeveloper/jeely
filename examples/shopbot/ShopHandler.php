<?php

declare(strict_types=1);

namespace Examples\Shopbot;

use Jeely\Api\Types\Error;
use Jeely\Api\Types\InlineKeyboardButton;
use Jeely\Api\Update;
use Jeely\Cache\FileCache;
use Jeely\Handlers\EventHandler;
use Jeely\Steps\CacheStepStore;
use Jeely\Steps\StepContext;
use Jeely\Steps\StepManager;
use Jeely\Tools\Button;
use Jeely\Tools\Html;

final class ShopHandler extends EventHandler
{
    /** @var array<string, array{title: string, price: int, emoji: string}> */
    private array $catalog;

    private StepManager $steps;

    private OrderStore $orders;

    private int $orderChannelId;

    protected function onBoot(): void
    {
        $me = $this->telegram->getMe();
        $botId = $me instanceof Error ? 0 : (int) ($me->id ?? 0);

        $this->orderChannelId = (int) (getenv('JEELY_ORDER_CHANNEL') ?: -1004302037734);
        $storage = dirname(__DIR__, 2) . '/storage/cache';
        $this->orders = OrderStore::open($storage . '/orders');
        $this->steps = (new StepManager(new CacheStepStore(new FileCache($storage))))
            ->forBot($botId);

        $this->catalog = [
            'tea' => ['title' => 'چای', 'price' => 4, 'emoji' => ShopEmoji::rich('tea')],
            'coffee' => ['title' => 'قهوه', 'price' => 6, 'emoji' => ShopEmoji::rich('coffee')],
            'cake' => ['title' => 'کیک', 'price' => 8, 'emoji' => ShopEmoji::rich('cake')],
        ];

        $this->registerShopFlow();
    }

    public function onCallbackQuery(Update $update): mixed
    {
        $data = (string) ($update->callbackQuery()?->data ?? '');

        if ($data === 'order:approve' || $data === 'order:reject') {
            return $this->handleOrderReview($update, $data);
        }

        return $this->dispatchShop($update);
    }

    public function onMessage(Update $update): mixed
    {
        if ($update->message()?->text === null) {
            return null;
        }

        return $this->dispatchShop($update);
    }

    private function dispatchShop(Update $update): mixed
    {
        if ($this->steps->isActive($update)) {
            return $this->steps->handle($update);
        }

        return $this->steps->start('shop', $update, ['items' => []]);
    }

    private function handleOrderReview(Update $update, string $data): mixed
    {
        $cq = $update->callbackQuery();
        $message = $cq?->message ?? null;

        if ($cq === null || $message === null || $message->chat?->id === null || $message->message_id === null) {
            return null;
        }

        $cacheKey = $this->orders->key($message->chat->id, $message->message_id);
        $stored = $this->orders->get($cacheKey);

        if (! is_array($stored) || ($stored['status'] ?? '') !== 'pending') {
            $update->answer('این سفارش قبلاً بررسی شده.', showAlert: true);

            return null;
        }

        $approved = $data === 'order:approve';
        $reviewer = $this->reviewerLabel($update);
        $footer = $approved
            ? "\n\n---\n" . ShopEmoji::html('check') . ' ' . ShopEmoji::html('paid') . ' '
                . Html::bold('تأیید شد') . ' ' . ShopEmoji::html('user') . ' توسط ' . Html::bold($reviewer)
            : "\n\n---\n" . ShopEmoji::html('reject') . ' ' . ShopEmoji::html('cancel') . ' '
                . Html::bold('رد شد') . ' ' . ShopEmoji::html('user') . ' توسط ' . Html::bold($reviewer);

        $baseText = (string) ($stored['text'] ?? '');
        if (str_contains($baseText, "\n\n---\n")) {
            $baseText = strstr($baseText, "\n\n---\n", true) ?: $baseText;
        }

        $text = $baseText . $footer;
        $update->answer($approved ? 'سفارش تأیید شد.' : 'سفارش رد شد.');

        $result = $message->editText($text, [
            'parse_mode' => 'HTML',
            'reply_markup' => Button::inlineKeyboard([]),
        ]);

        if ($result instanceof Error) {
            $this->logger->error('order review edit failed: {description}', [
                'description' => $result->description ?? 'unknown',
            ]);

            return null;
        }

        $this->orders->save($cacheKey, [
            'text' => $text,
            'status' => $approved ? 'approved' : 'rejected',
        ]);

        return $result;
    }

    private function registerShopFlow(): void
    {
        $this->steps->flow('shop', function ($flow) {
            $flow->ttl(1800);

            $flow->beforeEach(function (StepContext $ctx) {
                $cq = $ctx->callbackQuery();
                $data = $ctx->callbackData();

                if ($cq !== null && $data !== 'shop:qty:plus' && $data !== 'shop:qty:minus') {
                    $cq->answer('');
                }

                return match (true) {
                    $data === 'shop:back' => $ctx->back(),
                    $data === 'shop:cancel' => $ctx->cancel(),
                    is_string($data) && str_starts_with($data, 'shop:jump:') => $ctx->jump(substr($data, 10)),
                    default => null,
                };
            });

            $flow->step('product', fn ($step) => $this->productStep($step));
            $flow->step('qty', fn ($step) => $this->qtyStep($step));
            $flow->step('note', fn ($step) => $this->noteStep($step));
            $flow->step('checkout', fn ($step) => $this->checkoutStep($step));

            $flow->onComplete(function (StepContext $ctx) {
                $this->notifyOrderChannel($ctx);

                return $this->ask($ctx, '# ' . ShopEmoji::rich('paid') . " پرداخت شد\n\n"
                    . ShopEmoji::rich('ok') . " این یک تسویهٔ آزمایشی است.\n\n"
                    . $this->summary($ctx));
            });

            $flow->onCancel(fn (StepContext $ctx) => $this->ask($ctx,
                '# ' . ShopEmoji::rich('cancel') . " لغو شد\n\n"
                . ShopEmoji::rich('cancel') . ' سفارش دور ریخته شد.',
            ));
        });
    }

    private function productStep(mixed $step): void
    {
        $step->enter(function (StepContext $ctx) {
            $lines = [
                '# ' . ShopEmoji::rich('shop') . ' فروشگاه',
                '',
                ShopEmoji::rich('cart') . ' یک یا چند محصول انتخاب کن.',
                '',
            ];

            foreach ($this->catalog as $item) {
                $lines[] = sprintf('- %s **%s** — %d دلار', $item['emoji'], $item['title'], $item['price']);
            }

            if ($this->cartItems($ctx) !== []) {
                $lines[] = '';
                $lines[] = $this->summary($ctx);
            }

            $rows = [[
                $this->btn('چای ۴ دلار', 'shop:product:tea', 'primary', 'tea'),
                $this->btn('قهوه ۶ دلار', 'shop:product:coffee', 'primary', 'coffee'),
                $this->btn('کیک ۸ دلار', 'shop:product:cake', 'success', 'cake'),
            ]];

            if ($this->cartItems($ctx) !== []) {
                $rows[] = [$this->btn('ادامه', 'shop:jump:note', 'success', 'forward')];
            }
            $rows[] = $this->nav(false);

            return $this->ask($ctx, implode("\n", $lines), $rows);
        });

        $step->handle(function (StepContext $ctx) {
            $data = (string) $ctx->callbackData();
            if (! str_starts_with($data, 'shop:product:')) {
                return $ctx->retry('از دکمه‌های محصول استفاده کن.');
            }

            $sku = substr($data, 13);
            if (! isset($this->catalog[$sku])) {
                return $ctx->retry('این محصول وجود ندارد.');
            }

            $ctx->put('editing', $sku);
            if (! isset($this->cartItems($ctx)[$sku])) {
                $this->setQty($ctx, $sku, 1);
            }

            return $ctx->next();
        });
    }

    private function qtyStep(mixed $step): void
    {
        $step->enter(function (StepContext $ctx) {
            $sku = (string) $ctx->get('editing', '');
            $item = $this->catalog[$sku] ?? null;

            if ($item === null) {
                return $ctx->jump('product');
            }

            $qty = (int) ($this->cartItems($ctx)[$sku] ?? 1);

            return $this->ask($ctx, sprintf(
                "# %s تعداد\n\n%s **%s**\n%s تعداد فعلی: **%d**\n\nبا %s و %s کم و زیاد کن.",
                ShopEmoji::rich('qty'), $item['emoji'], $item['title'],
                ShopEmoji::rich('qty'), $qty, ShopEmoji::rich('plus'), ShopEmoji::rich('minus'),
            ), [
                [
                    $this->btn(' ', 'shop:qty:minus', 'danger', 'minus'),
                    $this->btn((string) $qty, 'shop:qty:stay', 'primary'),
                    $this->btn(' ', 'shop:qty:plus', 'success', 'plus'),
                ],
                [
                    $this->btn('تأیید', 'shop:qty:ok', 'success', 'check'),
                    $this->btn('محصول دیگر', 'shop:jump:product', 'primary', 'shop'),
                ],
                $this->nav(),
            ]);
        });

        $step->handle(function (StepContext $ctx) {
            $sku = (string) $ctx->get('editing', '');
            if (! isset($this->catalog[$sku])) {
                return $ctx->jump('product');
            }

            $data = (string) $ctx->callbackData();
            $qty = (int) ($this->cartItems($ctx)[$sku] ?? 1);
            $cq = $ctx->callbackQuery();

            if ($data === 'shop:qty:plus') {
                $next = min(20, $qty + 1);
                $this->setQty($ctx, $sku, $next);
                $cq?->answer('تعداد: ' . $next);

                return $ctx->repeat();
            }

            if ($data === 'shop:qty:minus') {
                $next = max(0, $qty - 1);
                $this->setQty($ctx, $sku, $next);
                $cq?->answer($next === 0 ? 'از سبد حذف می‌شود' : 'تعداد: ' . $next);

                return $ctx->repeat();
            }

            if ($data === 'shop:qty:stay') {
                return $ctx->stay();
            }

            if ($data === 'shop:qty:ok') {
                if ($qty < 1) {
                    $this->setQty($ctx, $sku, 0);
                }

                return $this->cartItems($ctx) === [] ? $ctx->jump('product') : $ctx->next();
            }

            return $ctx->retry('از ' . ShopEmoji::rich('plus') . ' و ' . ShopEmoji::rich('minus') . ' استفاده کن.');
        });
    }

    private function noteStep(mixed $step): void
    {
        $step->enter(fn (StepContext $ctx) => $this->ask($ctx,
            '# ' . ShopEmoji::rich('note') . " یادداشت\n\nیک یادداشت بفرست، یا رد کن.",
            [[$this->btn('رد کردن', 'shop:note:skip', 'primary', 'skip')], $this->nav()],
        ));

        $step->handle(function (StepContext $ctx) {
            if ($ctx->callbackData() === 'shop:note:skip') {
                $ctx->put('note', null);

                return $ctx->next();
            }

            $text = trim((string) $ctx->text());
            if ($text === '') {
                return $ctx->retry('یادداشت بفرست، یا رد کردن را بزن.');
            }

            $ctx->put('note', $text);

            return $ctx->next();
        });
    }

    private function checkoutStep(mixed $step): void
    {
        $step->enter(fn (StepContext $ctx) => $this->ask($ctx,
            $this->summary($ctx) . "\n\n"
            . ShopEmoji::rich('wallet') . ' پرداخت کن، یا '
            . ShopEmoji::rich('back') . ' به مرحله قبل برگرد.',
            [
                [$this->btn('پرداخت', 'shop:pay', 'success', 'wallet')],
                [
                    $this->btn('ویرایش سبد', 'shop:jump:product', 'primary', 'cart'),
                    $this->btn('ویرایش یادداشت', 'shop:jump:note', 'primary', 'edit'),
                ],
                $this->nav(),
            ],
        ));

        $step->handle(fn (StepContext $ctx) => $ctx->callbackData() === 'shop:pay'
            ? $ctx->complete()
            : $ctx->retry('پرداخت را بزن، یا یکی از مراحل قبل را ویرایش کن.'));
    }

    private function ask(StepContext $ctx, string $markdown, array $rows = []): mixed
    {
        $options = ['buttons' => $rows, 'is_rtl' => true];

        if ($ctx->callbackQuery() !== null) {
            return $ctx->callbackQuery()->editRich($markdown, $options);
        }

        return $ctx->update?->replyRich($markdown, $options);
    }

    /** @return array<string, int> */
    private function cartItems(StepContext $ctx): array
    {
        $items = $ctx->get('items');

        return is_array($items) ? $items : [];
    }

    private function setQty(StepContext $ctx, string $sku, int $qty): void
    {
        $items = $this->cartItems($ctx);
        if ($qty <= 0) {
            unset($items[$sku]);
        } else {
            $items[$sku] = $qty;
        }
        $ctx->put('items', $items);
    }

    private function btn(string $text, string $data, string $style, ?string $emojiKey = null): InlineKeyboardButton
    {
        $extras = ['style' => $style];
        if ($emojiKey !== null) {
            $extras['icon_custom_emoji_id'] = ShopEmoji::IDS[$emojiKey];
        }

        return Button::inline($text, $data, $extras);
    }

    /** @return array<int, InlineKeyboardButton> */
    private function nav(bool $back = true): array
    {
        $row = $back ? [$this->btn('قبلی', 'shop:back', 'primary', 'back')] : [];
        $row[] = $this->btn('انصراف', 'shop:cancel', 'danger', 'cancel');

        return $row;
    }

    private function summary(StepContext $ctx): string
    {
        $items = $this->cartItems($ctx);
        $note = $ctx->get('note');
        $noteText = is_string($note) && $note !== '' ? $note : '—';
        $lines = [
            '# ' . ShopEmoji::rich('cart') . ' سبد خرید', '',
            '| کالا | تعداد | مبلغ |', '| --- | ---: | ---: |',
        ];
        $total = 0;

        foreach ($items as $sku => $qty) {
            $item = $this->catalog[$sku] ?? null;
            if ($item === null) {
                continue;
            }
            $qty = (int) $qty;
            $line = $item['price'] * $qty;
            $total += $line;
            $lines[] = sprintf('| %s %s | %d | %d دلار |', $item['emoji'], $item['title'], $qty, $line);
        }

        if ($items === []) {
            $lines[] = '| — | — | — |';
        }

        $lines[] = '';
        $lines[] = ShopEmoji::rich('note') . ' **یادداشت:** ' . $noteText;
        $lines[] = ShopEmoji::rich('total') . ' **جمع:** ' . $total . ' دلار';

        return implode("\n", $lines);
    }

    private function notifyOrderChannel(StepContext $ctx): void
    {
        $text = $this->channelOrderText($ctx);

        $result = $this->telegram->sendMessage([
            'chat_id' => $this->orderChannelId,
            'text' => $text,
            'parse_mode' => 'HTML',
            'reply_markup' => Button::inlineKeyboard([[
                $this->channelBtn('check', 'تأیید', 'order:approve', 'success'),
                $this->channelBtn('reject', 'رد', 'order:reject', 'danger'),
            ]]),
            'async' => false,
        ]);

        if ($result instanceof Error) {
            $this->logger->error('order channel notify failed: {description}', [
                'description' => $result->description ?? 'unknown',
                'channel' => $this->orderChannelId,
            ]);

            return;
        }

        if ($result->message_id !== null) {
            $this->orders->save(
                $this->orders->key($this->orderChannelId, $result->message_id),
                ['text' => $text, 'status' => 'pending'],
            );
        }
    }

    private function channelOrderText(StepContext $ctx): string
    {
        $from = $ctx->update?->from();
        $items = $this->cartItems($ctx);
        $note = $ctx->get('note');
        $noteText = is_string($note) && $note !== '' ? $note : '—';

        $lines = [
            Html::bold(ShopEmoji::html('bell') . ' ' . ShopEmoji::html('paid') . ' سفارش جدید'),
            '',
            Html::bold(ShopEmoji::html('user') . ' مشتری'),
        ];

        if ($from !== null) {
            $name = trim(($from->first_name ?? '') . ' ' . ($from->last_name ?? ''));
            $lines[] = ShopEmoji::html('user') . ' ' . Html::bold('نام:') . ' ' . Html::escape($name !== '' ? $name : '—');
            if (($from->username ?? '') !== '') {
                $lines[] = ShopEmoji::html('username') . ' ' . Html::bold('یوزرنیم:') . ' @' . Html::escape($from->username);
            }
            $lines[] = ShopEmoji::html('user_id') . ' ' . Html::bold('شناسه:') . ' ' . Html::code((string) $from->id);
        }

        $lines[] = '';
        $lines[] = Html::bold(ShopEmoji::html('cart') . ' جزئیات سفارش');

        $total = 0;
        foreach ($items as $sku => $qty) {
            $item = $this->catalog[$sku] ?? null;
            if ($item === null) {
                continue;
            }
            $qty = (int) $qty;
            $line = $item['price'] * $qty;
            $total += $line;
            $lines[] = sprintf(
                '%s %s × %d — %s %d دلار',
                ShopEmoji::html($sku), Html::escape($item['title']), $qty, ShopEmoji::html('total'), $line,
            );
        }

        if ($items === []) {
            $lines[] = '—';
        }

        $lines[] = '';
        $lines[] = ShopEmoji::html('note') . ' ' . Html::bold('یادداشت:') . ' ' . Html::escape($noteText);
        $lines[] = ShopEmoji::html('wallet') . ' ' . Html::bold('جمع کل:') . ' '
            . ShopEmoji::html('total') . ' ' . Html::bold($total . ' دلار');

        return implode("\n", $lines);
    }

    private function channelBtn(string $key, string $label, string $data, string $style): InlineKeyboardButton
    {
        return new InlineKeyboardButton([
            'text' => (ShopEmoji::ALT[$key] ?? '⭐') . ' ' . $label,
            'callback_data' => $data,
            'style' => $style,
            'icon_custom_emoji_id' => ShopEmoji::IDS[$key],
        ]);
    }

    private function reviewerLabel(Update $update): string
    {
        $reviewer = $update->from();
        if ($reviewer === null) {
            return '—';
        }

        $name = trim(($reviewer->first_name ?? '') . ' ' . ($reviewer->last_name ?? ''));
        if ($name !== '') {
            return $name;
        }

        if (($reviewer->username ?? '') !== '') {
            return '@' . $reviewer->username;
        }

        return (string) ($reviewer->id ?? '—');
    }
}
