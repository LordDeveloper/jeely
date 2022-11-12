<?php

namespace Jeely\TL\Types;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\LazyUpdates;
use Jeely\Tools\Constant;


/**
 * @class Message
 * @description This object represents a message.
 *
 * @method int getMessageId() Unique message identifier inside this chat
 * @method User getFrom() Optional. Sender of the message;
 * empty for messages sent to channels. For backward compatibility, the field contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
 * @method Chat getSenderChat() Optional. Sender of the message, sent on behalf of a chat. For example, the channel itself for channel posts, the supergroup itself for messages from anonymous group administrators, the linked channel for messages automatically forwarded to the discussion group. For backward compatibility, the field from contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
 * @method int getDate() Date the message was sent in Unix time
 * @method Chat getChat() Conversation the message belongs to
 * @method User getForwardFrom() Optional. For forwarded messages, sender of the original message
 * @method Chat getForwardFromChat() Optional. For messages forwarded from channels or from anonymous administrators, information about the original sender chat
 * @method int getForwardFromMessageId() Optional. For messages forwarded from channels, identifier of the original message in the channel
 * @method string getForwardSignature() Optional. For forwarded messages that were originally sent in channels or by an anonymous chat administrator, signature of the message sender if present
 * @method string getForwardSenderName() Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
 * @method int getForwardDate() Optional. For forwarded messages, date the original message was sent in Unix time
 * @method bool getIsAutomaticForward() Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
 * @method Message getReplyToMessage() Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
 * @method User getViaBot() Optional. Bot through which the message was sent
 * @method int getEditDate() Optional. Date the message was last edited in Unix time
 * @method bool getHasProtectedContent() Optional. True, if the message can't be forwarded
 * @method string getMediaGroupId() Optional. The unique identifier of a media message group this message belongs to
 * @method string getAuthorSignature() Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
 * @method string getText() Optional. For text messages, the actual UTF-8 text of the message
 * @method MessageEntity[] getEntities() Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
 * @method Animation getAnimation() Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
 * @method Audio getAudio() Optional. Message is an audio file, information about the file
 * @method Document getDocument() Optional. Message is a general file, information about the file
 * @method PhotoSize[] getPhoto() Optional. Message is a photo, available sizes of the photo
 * @method Sticker getSticker() Optional. Message is a sticker, information about the sticker
 * @method Video getVideo() Optional. Message is a video, information about the video
 * @method VideoNote getVideoNote() Optional. Message is a video note, information about the video message
 * @method Voice getVoice() Optional. Message is a voice message, information about the file
 * @method string getCaption() Optional. Caption for the animation, audio, document, photo, video or voice
 * @method MessageEntity[] getCaptionEntities() Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
 * @method Contact getIsMedia() Optional. Determine a message contains a media
 * @method Contact getFileId() Optional. Current message media file_id
 * @method Contact getContact() Optional. Specifies the media type in the message
 * @method Contact getMediaType() Optional. Message is a shared contact, information about the contact
 * @method Dice getDice() Optional. Message is a dice with random value
 * @method Game getGame() Optional. Message is a game, information about the game. More about games »
 * @method Poll getPoll() Optional. Message is a native poll, information about the poll
 * @method Venue getVenue() Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set
 * @method Location getLocation() Optional. Message is a shared location, information about the location
 * @method User[] getNewChatMembers() Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
 * @method User getLeftChatMember() Optional. A member was removed from the group, information about them (this member may be the bot itself)
 * @method string getNewChatTitle() Optional. A chat title was changed to this value
 * @method PhotoSize[] getNewChatPhoto() Optional. A chat photo was change to this value
 * @method bool getDeleteChatPhoto() Optional. Service message: the chat photo was deleted
 * @method bool getGroupChatCreated() Optional. Service message: the group has been created
 * @method bool getSupergroupChatCreated() Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
 * @method bool getChannelChatCreated() Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
 * @method MessageAutoDeleteTimerChanged getMessageAutoDeleteTimerChanged() Optional. Service message: auto-delete timer settings changed in the chat
 * @method int getMigrateToChatId() Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @method int getMigrateFromChatId() Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @method Message getPinnedMessage() Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
 * @method Invoice getInvoice() Optional. Message is an invoice for a payment, information about the invoice. More about payments »
 * @method SuccessfulPayment getSuccessfulPayment() Optional. Message is a service message about a successful payment, information about the payment. More about payments »
 * @method string getConnectedWebsite() Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
 * @method PassportData getPassportData() Optional. Telegram Passport data
 * @method ProximityAlertTriggered getProximityAlertTriggered() Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
 * @method VideoChatScheduled getVideoChatScheduled() Optional. Service message: video chat scheduled
 * @method VideoChatStarted getVideoChatStarted() Optional. Service message: video chat started
 * @method VideoChatEnded getVideoChatEnded() Optional. Service message: video chat ended
 * @method VideoChatParticipantsInvited getVideoChatParticipantsInvited() Optional. Service message: new participants invited to a video chat
 * @method WebAppData getWebAppData() Optional. Service message: data sent by a Web App
 * @method InlineKeyboardMarkup getReplyMarkup() Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
 *
 * @method bool isMessageId()
 * @method bool isFrom()
 * @method bool isSenderChat()
 * @method bool isDate()
 * @method bool isChat()
 * @method bool isForwardFrom()
 * @method bool isForwardFromChat()
 * @method bool isForwardFromMessageId()
 * @method bool isForwardSignature()
 * @method bool isForwardSenderName()
 * @method bool isForwardDate()
 * @method bool isIsAutomaticForward()
 * @method bool isReplyToMessage()
 * @method bool isViaBot()
 * @method bool isEditDate()
 * @method bool isHasProtectedContent()
 * @method bool isMediaGroupId()
 * @method bool isAuthorSignature()
 * @method bool isText()
 * @method bool isEntities()
 * @method bool isAnimation()
 * @method bool isAudio()
 * @method bool isDocument()
 * @method bool isPhoto()
 * @method bool isSticker()
 * @method bool isVideo()
 * @method bool isVideoNote()
 * @method bool isVoice()
 * @method bool isCaption()
 * @method bool isCaptionEntities()
 * @method bool isIsMedia()
 * @method bool isFileId()
 * @method bool isMediaType()
 * @method bool isContact()
 * @method bool isDice()
 * @method bool isGame()
 * @method bool isPoll()
 * @method bool isVenue()
 * @method bool isLocation()
 * @method bool isNewChatMembers()
 * @method bool isLeftChatMember()
 * @method bool isNewChatTitle()
 * @method bool isNewChatPhoto()
 * @method bool isDeleteChatPhoto()
 * @method bool isGroupChatCreated()
 * @method bool isSupergroupChatCreated()
 * @method bool isChannelChatCreated()
 * @method bool isMessageAutoDeleteTimerChanged()
 * @method bool isMigrateToChatId()
 * @method bool isMigrateFromChatId()
 * @method bool isPinnedMessage()
 * @method bool isInvoice()
 * @method bool isSuccessfulPayment()
 * @method bool isConnectedWebsite()
 * @method bool isPassportData()
 * @method bool isProximityAlertTriggered()
 * @method bool isVideoChatScheduled()
 * @method bool isVideoChatStarted()
 * @method bool isVideoChatEnded()
 * @method bool isVideoChatParticipantsInvited()
 * @method bool isWebAppData()
 * @method bool isReplyMarkup()
 *
 * @method $this setMessageId()
 * @method $this setFrom()
 * @method $this setSenderChat()
 * @method $this setDate()
 * @method $this setChat()
 * @method $this setForwardFrom()
 * @method $this setForwardFromChat()
 * @method $this setForwardFromMessageId()
 * @method $this setForwardSignature()
 * @method $this setForwardSenderName()
 * @method $this setForwardDate()
 * @method $this setIsAutomaticForward()
 * @method $this setReplyToMessage()
 * @method $this setViaBot()
 * @method $this setEditDate()
 * @method $this setHasProtectedContent()
 * @method $this setMediaGroupId()
 * @method $this setAuthorSignature()
 * @method $this setText()
 * @method $this setEntities()
 * @method $this setAnimation()
 * @method $this setAudio()
 * @method $this setDocument()
 * @method $this setPhoto()
 * @method $this setSticker()
 * @method $this setVideo()
 * @method $this setVideoNote()
 * @method $this setVoice()
 * @method $this setCaption()
 * @method $this setCaptionEntities()
 * @method $this setIsMedia()
 * @method $this setFileId()
 * @method $this setMediaType()
 * @method $this setContact()
 * @method $this setDice()
 * @method $this setGame()
 * @method $this setPoll()
 * @method $this setVenue()
 * @method $this setLocation()
 * @method $this setNewChatMembers()
 * @method $this setLeftChatMember()
 * @method $this setNewChatTitle()
 * @method $this setNewChatPhoto()
 * @method $this setDeleteChatPhoto()
 * @method $this setGroupChatCreated()
 * @method $this setSupergroupChatCreated()
 * @method $this setChannelChatCreated()
 * @method $this setMessageAutoDeleteTimerChanged()
 * @method $this setMigrateToChatId()
 * @method $this setMigrateFromChatId()
 * @method $this setPinnedMessage()
 * @method $this setInvoice()
 * @method $this setSuccessfulPayment()
 * @method $this setConnectedWebsite()
 * @method $this setPassportData()
 * @method $this setProximityAlertTriggered()
 * @method $this setVideoChatScheduled()
 * @method $this setVideoChatStarted()
 * @method $this setVideoChatEnded()
 * @method $this setVideoChatParticipantsInvited()
 * @method $this setWebAppData()
 * @method $this setReplyMarkup()
 *
 * @method $this unsetMessageId()
 * @method $this unsetFrom()
 * @method $this unsetSenderChat()
 * @method $this unsetDate()
 * @method $this unsetChat()
 * @method $this unsetForwardFrom()
 * @method $this unsetForwardFromChat()
 * @method $this unsetForwardFromMessageId()
 * @method $this unsetForwardSignature()
 * @method $this unsetForwardSenderName()
 * @method $this unsetForwardDate()
 * @method $this unsetIsAutomaticForward()
 * @method $this unsetReplyToMessage()
 * @method $this unsetViaBot()
 * @method $this unsetEditDate()
 * @method $this unsetHasProtectedContent()
 * @method $this unsetMediaGroupId()
 * @method $this unsetAuthorSignature()
 * @method $this unsetText()
 * @method $this unsetEntities()
 * @method $this unsetAnimation()
 * @method $this unsetAudio()
 * @method $this unsetDocument()
 * @method $this unsetPhoto()
 * @method $this unsetSticker()
 * @method $this unsetVideo()
 * @method $this unsetVideoNote()
 * @method $this unsetVoice()
 * @method $this unsetCaption()
 * @method $this unsetCaptionEntities()
 * @method $this unsetIsMedia()
 * @method $this unsetFileId()
 * @method $this unsetMediaType()
 * @method $this unsetContact()
 * @method $this unsetDice()
 * @method $this unsetGame()
 * @method $this unsetPoll()
 * @method $this unsetVenue()
 * @method $this unsetLocation()
 * @method $this unsetNewChatMembers()
 * @method $this unsetLeftChatMember()
 * @method $this unsetNewChatTitle()
 * @method $this unsetNewChatPhoto()
 * @method $this unsetDeleteChatPhoto()
 * @method $this unsetGroupChatCreated()
 * @method $this unsetSupergroupChatCreated()
 * @method $this unsetChannelChatCreated()
 * @method $this unsetMessageAutoDeleteTimerChanged()
 * @method $this unsetMigrateToChatId()
 * @method $this unsetMigrateFromChatId()
 * @method $this unsetPinnedMessage()
 * @method $this unsetInvoice()
 * @method $this unsetSuccessfulPayment()
 * @method $this unsetConnectedWebsite()
 * @method $this unsetPassportData()
 * @method $this unsetProximityAlertTriggered()
 * @method $this unsetVideoChatScheduled()
 * @method $this unsetVideoChatStarted()
 * @method $this unsetVideoChatEnded()
 * @method $this unsetVideoChatParticipantsInvited()
 * @method $this unsetWebAppData()
 * @method $this unsetReplyMarkup()
 *
 * @property int $message_id Unique message identifier inside this chat
 * @property User $from Optional. Sender of the message; empty for messages sent to channels. For backward compatibility, the field contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
 * @property Chat $sender_chat Optional. Sender of the message, sent on behalf of a chat. For example, the channel itself for channel posts, the supergroup itself for messages from anonymous group administrators, the linked channel for messages automatically forwarded to the discussion group. For backward compatibility, the field from contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
 * @property int $date Date the message was sent in Unix time
 * @property Chat $chat Conversation the message belongs to
 * @property User $forward_from Optional. For forwarded messages, sender of the original message
 * @property Chat $forward_from_chat Optional. For messages forwarded from channels or from anonymous administrators, information about the original sender chat
 * @property int $forward_from_message_id Optional. For messages forwarded from channels, identifier of the original message in the channel
 * @property string $forward_signature Optional. For forwarded messages that were originally sent in channels or by an anonymous chat administrator, signature of the message sender if present
 * @property string $forward_sender_name Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
 * @property int $forward_date Optional. For forwarded messages, date the original message was sent in Unix time
 * @property bool $is_automatic_forward Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
 * @property Message $reply_to_message Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
 * @property User $via_bot Optional. Bot through which the message was sent
 * @property int $edit_date Optional. Date the message was last edited in Unix time
 * @property bool $has_protected_content Optional. True, if the message can't be forwarded
 * @property string $media_group_id Optional. The unique identifier of a media message group this message belongs to
 * @property string $author_signature Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
 * @property string $text Optional. For text messages, the actual UTF-8 text of the message
 * @property MessageEntity[] $entities Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
 * @property Animation $animation Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
 * @property Audio $audio Optional. Message is an audio file, information about the file
 * @property Document $document Optional. Message is a general file, information about the file
 * @property PhotoSize[] $photo Optional. Message is a photo, available sizes of the photo
 * @property Sticker $sticker Optional. Message is a sticker, information about the sticker
 * @property Video $video Optional. Message is a video, information about the video
 * @property VideoNote $video_note Optional. Message is a video note, information about the video message
 * @property Voice $voice Optional. Message is a voice message, information about the file
 * @property string $caption Optional. Caption for the animation, audio, document, photo, video or voice
 * @property MessageEntity[] $caption_entities Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
 * @property bool $is_media Optional. Determine a message contains a media
 * @property string $file_id Optional. Current message media file_id
 * @property string $media_type Optional. Specifies the media type in the message
 * @property Contact $contact Optional. Message is a shared contact, information about the contact
 * @property Dice $dice Optional. Message is a dice with random value
 * @property Game $game Optional. Message is a game, information about the game. More about games »
 * @property Poll $poll Optional. Message is a native poll, information about the poll
 * @property Venue $venue Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set
 * @property Location $location Optional. Message is a shared location, information about the location
 * @property User[] $new_chat_members Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
 * @property User $left_chat_member Optional. A member was removed from the group, information about them (this member may be the bot itself)
 * @property string $new_chat_title Optional. A chat title was changed to this value
 * @property PhotoSize[] $new_chat_photo Optional. A chat photo was change to this value
 * @property bool $delete_chat_photo Optional. Service message: the chat photo was deleted
 * @property bool $group_chat_created Optional. Service message: the group has been created
 * @property bool $supergroup_chat_created Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
 * @property bool $channel_chat_created Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
 * @property MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed Optional. Service message: auto-delete timer settings changed in the chat
 * @property int $migrate_to_chat_id Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property int $migrate_from_chat_id Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property Message $pinned_message Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
 * @property Invoice $invoice Optional. Message is an invoice for a payment, information about the invoice. More about payments »
 * @property SuccessfulPayment $successful_payment Optional. Message is a service message about a successful payment, information about the payment. More about payments »
 * @property string $connected_website Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
 * @property PassportData $passport_data Optional. Telegram Passport data
 * @property ProximityAlertTriggered $proximity_alert_triggered Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
 * @property VideoChatScheduled $video_chat_scheduled Optional. Service message: video chat scheduled
 * @property VideoChatStarted $video_chat_started Optional. Service message: video chat started
 * @property VideoChatEnded $video_chat_ended Optional. Service message: video chat ended
 * @property VideoChatParticipantsInvited $video_chat_participants_invited Optional. Service message: new participants invited to a video chat
 * @property WebAppData $web_app_data Optional. Service message: data sent by a Web App
 * @property InlineKeyboardMarkup $reply_markup Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
 *
 * @see https://core.telegram.org/bots/api#message
 */
class Message extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'message_id' => 'int',
        'from' => 'User',
        'sender_chat' => 'Chat',
        'date' => 'int',
        'chat' => 'Chat',
        'forward_from' => 'User',
        'forward_from_chat' => 'Chat',
        'forward_from_message_id' => 'int',
        'forward_signature' => 'string',
        'forward_sender_name' => 'string',
        'forward_date' => 'int',
        'is_automatic_forward' => 'bool',
        'reply_to_message' => 'Message',
        'via_bot' => 'User',
        'edit_date' => 'int',
        'has_protected_content' => 'bool',
        'media_group_id' => 'string',
        'author_signature' => 'string',
        'text' => 'string',
        'entities' => 'MessageEntity[]',
        'animation' => 'Animation',
        'audio' => 'Audio',
        'document' => 'Document',
        'photo' => 'PhotoSize[]',
        'sticker' => 'Sticker',
        'video' => 'Video',
        'video_note' => 'VideoNote',
        'voice' => 'Voice',
        'caption' => 'string',
        'caption_entities' => 'MessageEntity[]',
        'contact' => 'Contact',
        'dice' => 'Dice',
        'game' => 'Game',
        'poll' => 'Poll',
        'venue' => 'Venue',
        'location' => 'Location',
        'new_chat_members' => 'User[]',
        'left_chat_member' => 'User',
        'new_chat_title' => 'string',
        'new_chat_photo' => 'PhotoSize[]',
        'delete_chat_photo' => 'bool',
        'group_chat_created' => 'bool',
        'supergroup_chat_created' => 'bool',
        'channel_chat_created' => 'bool',
        'message_auto_delete_timer_changed' => 'MessageAutoDeleteTimerChanged',
        'migrate_to_chat_id' => 'int',
        'migrate_from_chat_id' => 'int',
        'pinned_message' => 'Message',
        'invoice' => 'Invoice',
        'successful_payment' => 'SuccessfulPayment',
        'connected_website' => 'string',
        'passport_data' => 'PassportData',
        'proximity_alert_triggered' => 'ProximityAlertTriggered',
        'video_chat_scheduled' => 'VideoChatScheduled',
        'video_chat_started' => 'VideoChatStarted',
        'video_chat_ended' => 'VideoChatEnded',
        'video_chat_participants_invited' => 'VideoChatParticipantsInvited',
        'web_app_data' => 'WebAppData',
        'reply_markup' => 'InlineKeyboardMarkup',
        'is_media' => 'bool',
        'media_type' => 'string',
        'file_id' => 'string',
    ];

    private function checkForMedia()
    {
        foreach (Constant::MEDIA_TYPES as $type) {
            if (isset($this[$type])) {
                $media = $this[$type];
                $this->_setProperty('is_media', true);
                $this->_setProperty('file_id', is_array($media) ? end($media)->file_id : $media->file_id);
                $this->_setProperty('media_type', $type);

                break;
            }
        }
    }

    public function _init()
    {
        $this->checkForMedia();

        parent::_init();
    }

    public function delete(): Error|PromiseInterface|bool
    {
        return $this->telegram->deleteMessage([
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
        ]);
    }

    public function reply($text, ... $args): Error|PromiseInterface|Message
    {
        return $this->telegram->sendMessage(... array_merge($args, [
            'chat_id' => $this->chat->id,
            'text' => $text,
            'reply_to_message_id' => $this->message_id,
            'allow_sending_without_reply' => true,
        ]));
    }

    public function replyDocument($document, ... $args): Error|PromiseInterface|Message
    {
        return $this->telegram->sendDocument(... array_merge($args, [
            'chat_id' => $this->chat->id,
            'document' => $document,
            'reply_to_message_id' => $this->message_id,
            'allow_sending_without_reply' => true,
        ]));
    }

    public function replyPhoto($photo, ... $args): Error|PromiseInterface|Message
    {
        return $this->telegram->sendPhoto(... array_merge($args, [
            'chat_id' => $this->chat->id,
            'photo' => $photo,
            'reply_to_message_id' => $this->message_id,
            'allow_sending_without_reply' => true,
        ]));
    }

    public function edit(string $text = null, ... $args): Error|PromiseInterface|Message|bool
    {
        $fn = [
            $this->telegram,
                ! is_null($text)
                ? 'editMessageText'
                : (
                    isset($args['caption'])
                        ? 'editMessageCaption'
                        : 'editMessageReplyMarkup'
                )
        ];

        return $fn(... array_merge($args, [
            'chat_id' => $this->chat?->id,
            'text' => $text,
            'message_id' => $this->message_id,
        ]));
    }

    public function copy($receptor = null, ... $args): Error|PromiseInterface|MessageId
    {
        $receptor ??= $this->chat->id;

        return $this->telegram->copyMessage(array_merge($args, [
            'from_chat_id' => $this->chat->id,
            'chat_id' => $receptor,
            'message_id' => $this->message_id,
        ]));
    }
}