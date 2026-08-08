<?php

namespace Jeely\Tools;

use Jeely\Api\Types\CallbackGame;
use Jeely\Api\Types\CopyTextButton;
use Jeely\Api\Types\ForceReply;
use Jeely\Api\Types\InlineKeyboardButton;
use Jeely\Api\Types\InlineKeyboardMarkup;
use Jeely\Api\Types\KeyboardButton;
use Jeely\Api\Types\KeyboardButtonPollType;
use Jeely\Api\Types\KeyboardButtonRequestChat;
use Jeely\Api\Types\KeyboardButtonRequestManagedBot;
use Jeely\Api\Types\KeyboardButtonRequestUsers;
use Jeely\Api\Types\LoginUrl;
use Jeely\Api\Types\ReplyKeyboardMarkup;
use Jeely\Api\Types\ReplyKeyboardRemove;
use Jeely\Api\Types\SwitchInlineQueryChosenChat;
use Jeely\Api\Types\WebAppInfo;

/**
 * Fluent factory for Telegram reply / inline keyboard buttons and markups.
 */
class Button
{
    public static function text(string $text, array $extras = []): KeyboardButton
    {
        return new KeyboardButton(array_merge(['text' => $text], $extras));
    }

    public static function contact(string $text, array $extras = []): KeyboardButton
    {
        return self::text($text, array_merge($extras, ['request_contact' => true]));
    }

    public static function location(string $text, array $extras = []): KeyboardButton
    {
        return self::text($text, array_merge($extras, ['request_location' => true]));
    }

    public static function poll(string $text, string|array|KeyboardButtonPollType $type = [], array $extras = []): KeyboardButton
    {
        return self::text($text, array_merge($extras, [
            'request_poll' => self::normalizePollType($type),
        ]));
    }

    public static function web(string $text, string|array|WebAppInfo $webApp, array $extras = []): KeyboardButton
    {
        return self::text($text, array_merge($extras, [
            'web_app' => self::normalizeWebApp($webApp),
        ]));
    }

    public static function requestUsers(string $text, int|array|KeyboardButtonRequestUsers $request, array $extras = []): KeyboardButton
    {
        if (is_int($request)) {
            $request = ['request_id' => $request];
        }

        return self::text($text, array_merge($extras, [
            'request_users' => $request instanceof KeyboardButtonRequestUsers
                ? $request
                : new KeyboardButtonRequestUsers($request),
        ]));
    }

    public static function requestChat(string $text, int|array|KeyboardButtonRequestChat $request, array $extras = []): KeyboardButton
    {
        if (is_int($request)) {
            $request = ['request_id' => $request, 'chat_is_channel' => false];
        }

        return self::text($text, array_merge($extras, [
            'request_chat' => $request instanceof KeyboardButtonRequestChat
                ? $request
                : new KeyboardButtonRequestChat($request),
        ]));
    }

    public static function requestManagedBot(string $text, int|array|KeyboardButtonRequestManagedBot $request, array $extras = []): KeyboardButton
    {
        if (is_int($request)) {
            $request = ['request_id' => $request];
        }

        return self::text($text, array_merge($extras, [
            'request_managed_bot' => $request instanceof KeyboardButtonRequestManagedBot
                ? $request
                : new KeyboardButtonRequestManagedBot($request),
        ]));
    }

    public static function inline(string $text, string $callbackData, array $extras = []): InlineKeyboardButton
    {
        return self::inlineButton($text, array_merge($extras, [
            'callback_data' => $callbackData,
        ]));
    }

    public static function inlineWeb(string $text, string|array|WebAppInfo $webApp, array $extras = []): InlineKeyboardButton
    {
        return self::inlineButton($text, array_merge($extras, [
            'web_app' => self::normalizeWebApp($webApp),
        ]));
    }

    public static function url(string $text, string $url, array $extras = []): InlineKeyboardButton
    {
        return self::inlineButton($text, array_merge($extras, ['url' => $url]));
    }

    public static function loginUrl(string $text, string|array|LoginUrl $loginUrl, array $extras = []): InlineKeyboardButton
    {
        if (is_string($loginUrl)) {
            $loginUrl = ['url' => $loginUrl];
        }

        return self::inlineButton($text, array_merge($extras, [
            'login_url' => $loginUrl instanceof LoginUrl ? $loginUrl : new LoginUrl($loginUrl),
        ]));
    }

    public static function switch(string $text, string $query = '', bool $currentChat = false, array $extras = []): InlineKeyboardButton
    {
        $field = $currentChat ? 'switch_inline_query_current_chat' : 'switch_inline_query';

        return self::inlineButton($text, array_merge($extras, [
            $field => $query,
        ]));
    }

    public static function switchChosenChat(
        string $text,
        string|array|SwitchInlineQueryChosenChat $chosenChat = [],
        array $extras = []
    ): InlineKeyboardButton {
        if (is_string($chosenChat)) {
            $chosenChat = ['query' => $chosenChat];
        }

        return self::inlineButton($text, array_merge($extras, [
            'switch_inline_query_chosen_chat' => $chosenChat instanceof SwitchInlineQueryChosenChat
                ? $chosenChat
                : new SwitchInlineQueryChosenChat($chosenChat),
        ]));
    }

    public static function copyText(string $text, string $clipboardText, array $extras = []): InlineKeyboardButton
    {
        return self::inlineButton($text, array_merge($extras, [
            'copy_text' => new CopyTextButton(['text' => $clipboardText]),
        ]));
    }

    public static function game(string $text, array|CallbackGame $game = [], array $extras = []): InlineKeyboardButton
    {
        return self::inlineButton($text, array_merge($extras, [
            'callback_game' => $game instanceof CallbackGame ? $game : new CallbackGame($game),
        ]));
    }

    public static function pay(string $text, array $extras = []): InlineKeyboardButton
    {
        return self::inlineButton($text, array_merge($extras, ['pay' => true]));
    }

    public static function remove(bool $selective = false): ReplyKeyboardRemove
    {
        return new ReplyKeyboardRemove([
            'remove_keyboard' => true,
            'selective' => $selective,
        ]);
    }

    public static function forceReply(bool $selective = false, string $placeholder = ''): ForceReply
    {
        $payload = [
            'force_reply' => true,
            'selective' => $selective,
        ];

        if ($placeholder !== '') {
            $payload['input_field_placeholder'] = $placeholder;
        }

        return new ForceReply($payload);
    }

    /**
     * @param array<int, array<int, InlineKeyboardButton|array|string>> $rows
     */
    public static function inlineKeyboard(array $rows): InlineKeyboardMarkup
    {
        return new InlineKeyboardMarkup([
            'inline_keyboard' => self::normalizeInlineRows($rows),
        ]);
    }

    /**
     * @param array<int, array<int, KeyboardButton|array|string>> $rows
     */
    public static function replyKeyboard(array $rows, array $options = []): ReplyKeyboardMarkup
    {
        return new ReplyKeyboardMarkup(array_merge([
            'keyboard' => self::normalizeReplyRows($rows),
            'resize_keyboard' => true,
        ], $options));
    }

    private static function inlineButton(string $text, array $with = []): InlineKeyboardButton
    {
        return new InlineKeyboardButton(array_merge(['text' => $text], $with));
    }

    private static function normalizeWebApp(string|array|WebAppInfo $webApp): WebAppInfo
    {
        if ($webApp instanceof WebAppInfo) {
            return $webApp;
        }

        if (is_string($webApp)) {
            $webApp = ['url' => $webApp];
        }

        return new WebAppInfo($webApp);
    }

    private static function normalizePollType(string|array|KeyboardButtonPollType $type): KeyboardButtonPollType
    {
        if ($type instanceof KeyboardButtonPollType) {
            return $type;
        }

        if (is_string($type)) {
            $type = $type === '' ? [] : ['type' => $type];
        }

        return new KeyboardButtonPollType($type);
    }

    private static function normalizeInlineRows(array $rows): array
    {
        return array_map(static function (array $row): array {
            return array_map(static function ($button) {
                if ($button instanceof InlineKeyboardButton) {
                    return $button;
                }

                if (is_string($button)) {
                    return new InlineKeyboardButton(['text' => $button, 'callback_data' => $button]);
                }

                return new InlineKeyboardButton($button);
            }, $row);
        }, $rows);
    }

    private static function normalizeReplyRows(array $rows): array
    {
        return array_map(static function (array $row): array {
            return array_map(static function ($button) {
                if ($button instanceof KeyboardButton) {
                    return $button;
                }

                if (is_string($button)) {
                    return new KeyboardButton(['text' => $button]);
                }

                return new KeyboardButton($button);
            }, $row);
        }, $rows);
    }
}
