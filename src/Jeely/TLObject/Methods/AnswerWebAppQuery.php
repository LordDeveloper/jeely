<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\InlineQueryResult;
use Jeely\TLObject\Types\SentWebAppMessage;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class AnswerWebAppQuery
* @description Use this method to set the result of an interaction with a Web App and send a corresponding message on behalf of the user to the chat from which the query originated. On success, a SentWebAppMessage object is returned.
*
*
* @param	string $web_app_query_id Unique identifier for the query to be answered
* @param	InlineQueryResult $result A JSON-serialized object describing the message to be sent
*
*
* @property	string $web_app_query_id Unique identifier for the query to be answered
* @property	InlineQueryResult $result A JSON-serialized object describing the message to be sent
*
*/

#[Casts(['Jeely\\TLObject\\Types\\SentWebAppMessage'])]
class AnswerWebAppQuery extends MethodDefinition implements MethodDefinitionInterface
{

}