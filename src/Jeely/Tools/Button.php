<?php

namespace Jeely\Tools;

use Jeely\TL\Types\ForceReply;
use Jeely\TL\Types\InlineKeyboardButton;
use Jeely\TL\Types\KeyboardButton;
use Jeely\TL\Types\ReplyKeyboardRemove;

class Button
{
    public static function text($text, array $with = [], bool $resize = true, bool $oneTime = false, bool $selective = false): KeyboardButton
    {
        $with['one_time'] = $oneTime;
        $with['selective'] = $selective;

        return new KeyboardButton(array_merge(
            compact('text', 'resize'), $with
        ));
    }

    private static function inlineText($text, array $with = []): InlineKeyboardButton
    {
        return new InlineKeyboardButton(array_merge(
            compact('text'), $with
        ));
    }

    public static function contact($text, bool $resize = true, bool $oneTime = false, bool $selective = false): KeyboardButton
    {
        return clone self::text($text, [
            'request_contact' => true,
            'resize' => $resize,
            'one_time' => $oneTime,
            'selective' => $selective,
        ]);
    }

    public static function location($text, bool $resize = true, bool $oneTime = false, bool $selective = false): KeyboardButton
    {
        return clone self::text($text, [
            'request_location' => true,
            'resize' => $resize,
            'one_time' => $oneTime,
            'selective' => $selective,
        ]);
    }

    public static function poll($text, $poll, bool $resize = true, bool $oneTime = false, bool $selective = false): KeyboardButton
    {
        return clone self::text($text, [
            'request_poll' => $poll,
            'resize' => $resize,
            'one_time' => $oneTime,
            'selective' => $selective,
        ]);
    }

    public static function web($text, $webApp, bool $resize = true, bool $oneTime = false, bool $selective = false): KeyboardButton
    {
        return clone self::text($text, [
            'web_app' => $webApp,
            'resize' => $resize,
            'one_time' => $oneTime,
            'selective' => $selective,
        ]);
    }

    public static function inline($text, $data, bool $resize = true, bool $oneTime = false, bool $selective = false): InlineKeyboardButton
    {
        return clone self::inlineText($text, [
            'callback_data' => $data,
            'resize' => $resize,
            'one_time' => $oneTime,
            'selective' => $selective,
        ]);
    }

    public static function inlineWeb($text, $webApp, bool $resize = true, bool $oneTime = false, bool $selective = false): InlineKeyboardButton
    {
        return self::inlineText($text, [
            'web_app' => $webApp,
            'resize' => $resize,
            'one_time' => $oneTime,
            'selective' => $selective,
        ]);
    }

    public static function loginUrl($text, $loginUrl, bool $resize = true, bool $oneTime = false, bool $selective = false): InlineKeyboardButton
    {
        return self::inlineText($text, [
            'login_url' => $loginUrl,
            'resize' => $resize,
            'one_time' => $oneTime,
            'selective' => $selective,
        ]);
    }

    public static function switch($text, $query, $current = false, bool $resize = true, bool $oneTime = false, bool $selective = false): InlineKeyboardButton
    {
        $switchType = 'switch_inline_query';

        if ($current) {
            $switchType .= '_current_chat';
        }

        return self::inlineText($text, [
            $switchType => $query,
            'resize' => $resize,
            'one_time' => $oneTime,
            'selective' => $selective,
        ]);
    }

    public static function game($text, $game, bool $resize = true, bool $oneTime = false, bool $selective = false): InlineKeyboardButton
    {
        return self::inlineText($text, [
            'callback_game' => $game,
            'resize' => $resize,
            'one_time' => $oneTime,
            'selective' => $selective,
        ]);
    }

    public static function pay($text, bool $resize = true, bool $oneTime = false, bool $selective = false): InlineKeyboardButton
    {
        return self::inlineText($text, [
            'pay' => true,
            'resize' => $resize,
            'one_time' => $oneTime,
            'selective' => $selective,
        ]);
    }

    public static function remove(bool $selective = false): ReplyKeyboardRemove
    {
        return new ReplyKeyboardRemove([
            'remove_keyboard' => true,
            'selective' => $selective,
        ]);
    }

    public static function forceReply(bool $selective = false, string $placeHolder = ''): ForceReply
    {
        return new ForceReply([
            'force_reply' => true,
            'selective' => $selective,
            'input_field_placeholder' => $placeHolder,
        ]);
    }
}