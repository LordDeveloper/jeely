<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SendChatJoinRequestWebApp
 * @description Use this method to process a received chat join request query by showing a Mini App to the user before deciding the outcome. Call answerChatJoinRequestQuery to resolve the join request query based on the user interaction with the Mini App. Returns True on success.
 *
 * @property string $chat_join_request_query_id Unique identifier of the join request query
 * @property string $web_app_url An HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps
 *
 * @see https://core.telegram.org/bots/api#sendchatjoinrequestwebapp
 */
class SendChatJoinRequestWebApp extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
