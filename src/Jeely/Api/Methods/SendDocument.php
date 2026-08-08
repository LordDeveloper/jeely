<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SendDocument
 * @description Use this method to send general files. On success, the sent Message is returned. Bots can currently send files of any type of up to 50 MB in size, this limit may be changed in the future.
 *
 * @property string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
 * @property int|string $chat_id Unique identifier for the target chat or username of the target bot, supergroup or channel in the format ＠username
 * @property int $message_thread_id Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property int $direct_messages_topic_id Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
 * @property int $receiver_user_id For outgoing ephemeral messages, unique identifier of the user who will receive the message; for group and supergroup chats only. It is not guaranteed that the user will receive the message, especially if they are offline. See ephemeral message sending for more details.
 * @property string $callback_query_id For outgoing ephemeral messages, identifier of the callback query which triggered the message if any
 * @property InputFile|string $document File to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files »
 * @property InputFile|string $thumbnail Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @property string $caption Document caption (may also be used when resending documents by file_id), 0-1024 characters after entities parsing
 * @property string $parse_mode Mode for parsing entities in the document caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property bool $disable_content_type_detection Disables automatic server-side content type detection for files uploaded using multipart/form-data
 * @property bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent message from forwarding and saving
 * @property bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
 * @property string $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
 * @property SuggestedPostParameters $suggested_post_parameters A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
 * @property ReplyParameters $reply_parameters Description of the message to reply to
 * @property InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user.
 *
 * @see https://core.telegram.org/bots/api#senddocument
 */
class SendDocument extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Message';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return Message
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
