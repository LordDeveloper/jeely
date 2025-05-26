<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\InlineKeyboardMarkup;
use Jeely\TLObject\Types\Message;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class EditMessageLiveLocation
* @description Use this method to edit live location messages. A location can be edited until its live_period expires or editing is explicitly disabled by a call to stopMessageLiveLocation. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
*
*
* @param	string $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
* @param	int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	int $message_id Required if inline_message_id is not specified. Identifier of the message to edit
* @param	string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
* @param	float $latitude Latitude of new location
* @param	float $longitude Longitude of new location
* @param	int $live_period New period in seconds during which the location can be updated, starting from the message send date. If 0x7FFFFFFF is specified, then the location can be updated forever. Otherwise, the new value must not exceed the current live_period by more than a day, and the live location expiration date must remain within the next 90 days. If not specified, then live_period remains unchanged
* @param	float $horizontal_accuracy The radius of uncertainty for the location, measured in meters; 0-1500
* @param	int $heading Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
* @param	int $proximity_alert_radius The maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
* @param	InlineKeyboardMarkup $reply_markup A JSON-serialized object for a new inline keyboard.
*
*
* @property	string $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
* @property	int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	int $message_id Required if inline_message_id is not specified. Identifier of the message to edit
* @property	string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
* @property	float $latitude Latitude of new location
* @property	float $longitude Longitude of new location
* @property	int $live_period New period in seconds during which the location can be updated, starting from the message send date. If 0x7FFFFFFF is specified, then the location can be updated forever. Otherwise, the new value must not exceed the current live_period by more than a day, and the live location expiration date must remain within the next 90 days. If not specified, then live_period remains unchanged
* @property	float $horizontal_accuracy The radius of uncertainty for the location, measured in meters; 0-1500
* @property	int $heading Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
* @property	int $proximity_alert_radius The maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
* @property	InlineKeyboardMarkup $reply_markup A JSON-serialized object for a new inline keyboard.
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Message', 'bool'])]
class EditMessageLiveLocation extends MethodDefinition implements MethodDefinitionInterface
{

}