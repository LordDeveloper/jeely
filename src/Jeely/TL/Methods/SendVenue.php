<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\ForceReply;
use Jeely\TL\Types\InlineKeyboardMarkup;
use Jeely\TL\Types\Message;
use Jeely\TL\Types\ReplyKeyboardMarkup;
use Jeely\TL\Types\ReplyKeyboardRemove;

/**
 * @class SendVenue
 * @description Use this method to send information about a venue. On success, the sent Message is returned.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property float $latitude Latitude of the venue
 * @property float $longitude Longitude of the venue
 * @property string $title Name of the venue
 * @property string $address Address of the venue
 * @property string $foursquare_id Foursquare identifier of the venue
 * @property string $foursquare_type Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @property string $google_place_id Google Places identifier of the venue
 * @property string $google_place_type Google Places type of the venue. (See supported types.)
 * @property bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent message from forwarding and saving
 * @property int $reply_to_message_id If the message is a reply, ID of the original message
 * @property bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
 * @property InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 * 
 * @see https://api.telegram.org/bots/api#sendvenue
 */
class SendVenue  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'Message';

	/**
 	* @var int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 	*/
	public int|string $chat_id;

	/**
 	* @var float $latitude Latitude of the venue
 	*/
	public float $latitude;

	/**
 	* @var float $longitude Longitude of the venue
 	*/
	public float $longitude;

	/**
 	* @var string $title Name of the venue
 	*/
	public string $title;

	/**
 	* @var string $address Address of the venue
 	*/
	public string $address;

	/**
 	* @var mixed $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 	*/
	public mixed $reply_markup = null;

	/**
 	* @var ?bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
 	*/
	public ?bool $allow_sending_without_reply = null;

	/**
 	* @var int $reply_to_message_id If the message is a reply, ID of the original message
 	*/
	public int $reply_to_message_id = 0;

	/**
 	* @var ?bool $protect_content Protects the contents of the sent message from forwarding and saving
 	*/
	public ?bool $protect_content = null;

	/**
 	* @var ?bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 	*/
	public ?bool $disable_notification = null;

	/**
 	* @var string $google_place_type Google Places type of the venue. (See supported types.)
 	*/
	public string $google_place_type = '';

	/**
 	* @var string $google_place_id Google Places identifier of the venue
 	*/
	public string $google_place_id = '';

	/**
 	* @var string $foursquare_type Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 	*/
	public string $foursquare_type = '';

	/**
 	* @var string $foursquare_id Foursquare identifier of the venue
 	*/
	public string $foursquare_id = '';

	/**
	 * @var array $vars The value that are taken in the constructor method as method parameters.
	 */
	public function __construct(public array $vars = [])
	{}

	/**
	 * @return Message
	 */
	public function __invoke()
	{
		return $this->call();
	}
}