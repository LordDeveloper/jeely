<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\InlineQueryResult;
use Jeely\TLObject\Types\InlineQueryResultsButton;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class AnswerInlineQuery
* @description Use this method to send answers to an inline query. On success, True is returned.No more than 50 results per query are allowed.
*
*
* @param	string $inline_query_id Unique identifier for the answered query
* @param	InlineQueryResult[] $results A JSON-serialized array of results for the inline query
* @param	int $cache_time The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
* @param	bool $is_personal Pass True if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query.
* @param	string $next_offset Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
* @param	InlineQueryResultsButton $button A JSON-serialized object describing a button to be shown above inline query results
*
*
* @property	string $inline_query_id Unique identifier for the answered query
* @property	InlineQueryResult[] $results A JSON-serialized array of results for the inline query
* @property	int $cache_time The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
* @property	bool $is_personal Pass True if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query.
* @property	string $next_offset Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
* @property	InlineQueryResultsButton $button A JSON-serialized object describing a button to be shown above inline query results
*
*/

#[Casts(['bool'])]
class AnswerInlineQuery extends MethodDefinition implements MethodDefinitionInterface
{

}