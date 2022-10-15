<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\ForceReply;
use Jeely\TL\Types\InlineKeyboardMarkup;
use Jeely\TL\Types\Message;
use Jeely\TL\Types\ReplyKeyboardMarkup;
use Jeely\TL\Types\ReplyKeyboardRemove;

/**
 * @class SendContact
 * @description Use this method to send phone contacts. On success, the sent Message is returned.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property string $phone_number Contact's phone number
 * @property string $first_name Contact's first name
 * @property string $last_name Contact's last name
 * @property string $vcard Additional data about the contact in the form of a vCard, 0-2048 bytes
 * @property bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent message from forwarding and saving
 * @property int $reply_to_message_id If the message is a reply, ID of the original message
 * @property bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
 * @property InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove keyboard or to force a reply from the user.
 *
 * @see https://api.telegram.org/bots/api#sendcontact
 */
class SendContact extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'Message';

    /**
     * @var int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * @var string $phone_number Contact's phone number
     */
    public string $phone_number;

    /**
     * @var string $first_name Contact's first name
     */
    public string $first_name;

    /**
     * @var mixed $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove keyboard or to force a reply from the user.
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
     * @var string $vcard Additional data about the contact in the form of a vCard, 0-2048 bytes
     */
    public string $vcard = '';

    /**
     * @var string $last_name Contact's last name
     */
    public string $last_name = '';

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return Message
     */
    public function __invoke()
    {
        return $this->call();
    }
}