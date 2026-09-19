<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use Jeely\Api\Types\Message;
use Jeely\Api\Update;
use Jeely\Telegram;
use Jeely\Tools\Button;

final class BoundMethodsFakeTelegram extends Telegram
{
    /** @var array<int, array{method:string,params:array<string,mixed>}> */
    public array $calls = [];

    public function __construct()
    {
        parent::__construct('123:ABC');
    }

    public function __call(string $name, array $arguments = []): mixed
    {
        $params = $arguments[0] ?? [];
        if (! is_array($params)) {
            $params = [];
        }

        $this->calls[] = ['method' => $name, 'params' => $params];

        if (in_array($name, ['answerCallbackQuery', 'sendChatAction', 'deleteMessage', 'setMessageReaction'], true)) {
            return true;
        }

        return new Message([
            'message_id' => 1,
            'date' => 1,
            'chat' => ['id' => $params['chat_id'] ?? 1, 'type' => 'private'],
        ]);
    }
}

return [
    'message_edit_passes_text_and_options' => function (): void {
        $telegram = new BoundMethodsFakeTelegram();
        $message = (new Message([
            'message_id' => 7,
            'date' => 1,
            'chat' => ['id' => 42, 'type' => 'private'],
            'text' => 'old',
        ]))->withTelegram($telegram);

        $message->edit('new text', [
            'parse_mode' => 'HTML',
            'reply_markup' => Button::inlineKeyboard([]),
        ]);

        assertSame('editMessageText', $telegram->calls[0]['method']);
        assertSame('new text', $telegram->calls[0]['params']['text']);
        assertSame(42, $telegram->calls[0]['params']['chat_id']);
        assertSame(7, $telegram->calls[0]['params']['message_id']);
        assertSame('HTML', $telegram->calls[0]['params']['parse_mode']);
    },

    'message_edit_rich_message' => function (): void {
        $telegram = new BoundMethodsFakeTelegram();
        $message = (new Message([
            'message_id' => 8,
            'date' => 1,
            'chat' => ['id' => 42, 'type' => 'private'],
            'text' => 'old',
        ]))->withTelegram($telegram);

        $message->edit(null, [
            'rich_message' => ['markdown' => '# hi', 'is_rtl' => true],
        ]);

        assertSame('editMessageText', $telegram->calls[0]['method']);
        assertSame('# hi', $telegram->calls[0]['params']['rich_message']['markdown']);
    },

    'callback_message_edit_rich_uses_bound_telegram' => function (): void {
        $telegram = new BoundMethodsFakeTelegram();
        $update = (new Update([
            'update_id' => 2,
            'callback_query' => [
                'id' => 'cq2',
                'from' => ['id' => 9, 'is_bot' => false, 'first_name' => 'Ada'],
                'chat_instance' => 'x',
                'data' => 'shop:back',
                'message' => [
                    'message_id' => 5,
                    'date' => 1,
                    'chat' => ['id' => 42, 'type' => 'private'],
                    'text' => 'old',
                ],
            ],
        ]))->withTelegram($telegram);

        $update->message()->editRich('# shop', ['is_rtl' => true]);

        assertSame('editMessageText', $telegram->calls[0]['method']);
        assertSame('# shop', $telegram->calls[0]['params']['rich_message']['markdown']);
        assertSame(42, $telegram->calls[0]['params']['chat_id']);
        assertSame(5, $telegram->calls[0]['params']['message_id']);
    },

    'update_reply_and_edit_delegate' => function (): void {
        $telegram = new BoundMethodsFakeTelegram();
        $update = (new Update([
            'update_id' => 1,
            'callback_query' => [
                'id' => 'cq1',
                'from' => ['id' => 9, 'is_bot' => false, 'first_name' => 'Ada'],
                'chat_instance' => 'x',
                'data' => 'ok',
                'message' => [
                    'message_id' => 3,
                    'date' => 1,
                    'chat' => ['id' => 42, 'type' => 'private'],
                    'text' => 'hi',
                ],
            ],
        ]))->withTelegram($telegram);

        $update->answer('done');
        $update->edit('updated', ['parse_mode' => 'HTML']);

        assertSame('answerCallbackQuery', $telegram->calls[0]['method']);
        assertSame('done', $telegram->calls[0]['params']['text']);
        assertSame('editMessageText', $telegram->calls[1]['method']);
        assertSame('updated', $telegram->calls[1]['params']['text']);
    },

    'chat_send_and_typing' => function (): void {
        $telegram = new BoundMethodsFakeTelegram();
        $chat = (new \Jeely\Api\Types\Chat(['id' => 99, 'type' => 'private']))->withTelegram($telegram);

        $chat->send('hello', ['parse_mode' => 'HTML']);
        $chat->typing();

        assertSame('sendMessage', $telegram->calls[0]['method']);
        assertSame('hello', $telegram->calls[0]['params']['text']);
        assertSame('sendChatAction', $telegram->calls[1]['method']);
        assertSame('typing', $telegram->calls[1]['params']['action']);
    },
];
