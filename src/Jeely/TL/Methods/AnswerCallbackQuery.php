<?php

namespace Jeely\TL\Methods;


/**
 * @class AnswerCallbackQuery
 * @description Use this method to send answers to callback queries sent from inline keyboards. The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, True is returned.
 *
 * @property string $callback_query_id Unique identifier for the query to be answered
 * @property string $text Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
 * @property bool $show_alert If True, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to false.
 * @property string $url URL that will be opened by the user's client. If you have created a Game and accepted the conditions via @BotFather, specify the URL that opens your game - note that this will only work if the query comes from a callback_game button.Otherwise, you may use links like t.me/your_bot?start=XXXX that open your bot with a parameter.
 * @property int $cache_time The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
 *
 * @see https://api.telegram.org/bots/api#answercallbackquery
 */
class AnswerCallbackQuery extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'bool';

    /**
     * @var string $callback_query_id Unique identifier for the query to be answered
     */
    public string $callback_query_id;

    /**
     * @var int $cache_time The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
     */
    public int $cache_time = 0;

    /**
     * @var string $url URL that will be opened by the user's client. If you have created a Game and accepted the conditions via @BotFather, specify the URL that opens your game - note that this will only work if the query comes from a callback_game button.Otherwise, you may use links like t.me/your_bot?start=XXXX that open your bot with a parameter.
     */
    public string $url = '';

    /**
     * @var bool $show_alert If True, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to false.
     */
    public bool $show_alert = false;

    /**
     * @var string $text Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
     */
    public string $text = '';

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return bool
     */
    public function __invoke()
    {
        return $this->call();
    }
}