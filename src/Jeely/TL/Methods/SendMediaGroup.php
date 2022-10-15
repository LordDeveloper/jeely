<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\InputMediaAudio;
use Jeely\TL\Types\InputMediaDocument;
use Jeely\TL\Types\InputMediaPhoto;
use Jeely\TL\Types\InputMediaVideo;
use Jeely\TL\Types\Message;

/**
 * @class SendMediaGroup
 * @description Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an array of Messages that were sent is returned.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property InputMediaAudio|InputMediaDocument|InputMediaPhoto|InputMediaVideo[] $media A JSON-serialized array describing messages to be sent, must include 2-10 items
 * @property bool $disable_notification Sends messages silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent messages from forwarding and saving
 * @property int $reply_to_message_id If the messages are a reply, ID of the original message
 * @property bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
 *
 * @see https://api.telegram.org/bots/api#sendmediagroup
 */
class SendMediaGroup extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'Message[]';

    /**
     * @var int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * @var InputMediaAudio|InputMediaDocument|InputMediaPhoto|InputMediaVideo[] $media A JSON-serialized array describing messages to be sent, must include 2-10 items
     */
    public array $media;

    /**
     * @var ?bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     */
    public ?bool $allow_sending_without_reply = null;

    /**
     * @var int $reply_to_message_id If the messages are a reply, ID of the original message
     */
    public int $reply_to_message_id = 0;

    /**
     * @var ?bool $protect_content Protects the contents of the sent messages from forwarding and saving
     */
    public ?bool $protect_content = null;

    /**
     * @var ?bool $disable_notification Sends messages silently. Users will receive a notification with no sound.
     */
    public ?bool $disable_notification = null;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return Message[]
     */
    public function __invoke()
    {
        return $this->call();
    }
}