<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use Jeely\Tools\Button;
use Jeely\Api\Types\InlineKeyboardMarkup;
use Jeely\Api\Types\ReplyKeyboardMarkup;
use Jeely\Api\Types\WebAppInfo;

return [
    'button_inline_and_markup' => function (): void {
        $btn = Button::inline('OK', 'ok:1');
        assertEquals('OK', $btn->text);
        assertEquals('ok:1', $btn->callback_data);

        $markup = Button::inlineKeyboard([
            [Button::url('Docs', 'https://example.com'), Button::copyText('Copy', 'hello')],
            [Button::switch('Search', 'q', true)],
        ]);

        assertInstanceOf(InlineKeyboardMarkup::class, $markup);
        $rows = $markup->inline_keyboard;
        assertEquals(2, count($rows));
        assertEquals('https://example.com', $rows[0][0]->url);
        assertEquals('hello', $rows[0][1]->copy_text->text);
        assertEquals('q', $rows[1][0]->switch_inline_query_current_chat);
    },

    'button_reply_keyboard_and_webapp' => function (): void {
        $markup = Button::replyKeyboard([
            [Button::contact('Share phone'), Button::location('Share loc')],
            [Button::web('Open', 'https://app.example.com')],
        ], [
            'one_time_keyboard' => true,
        ]);

        assertInstanceOf(ReplyKeyboardMarkup::class, $markup);
        assertTrue($markup->resize_keyboard === true);
        assertTrue($markup->one_time_keyboard === true);
        assertInstanceOf(WebAppInfo::class, $markup->keyboard[1][0]->web_app);
        assertEquals('https://app.example.com', $markup->keyboard[1][0]->web_app->url);
    },

    'telegram_normalizes_buttons_shortcut' => function (): void {
        $telegram = new \Jeely\Telegram('123:ABC');

        $ref = new ReflectionClass($telegram);
        $method = $ref->getMethod('prepareFields');
        $method->setAccessible(true);

        $fields = $method->invoke($telegram, [
            'chat_id' => 'me',
            'text' => 'hi',
            'buttons' => [
                [Button::inline('A', 'a'), Button::inline('B', 'b')],
            ],
        ]);

        assertEquals(123, $fields['chat_id']);
        assertTrue(isset($fields['reply_markup']['inline_keyboard']));
        assertFalse(isset($fields['buttons']));
        assertEquals('a', $fields['reply_markup']['inline_keyboard'][0][0]->callback_data);
    },
];
