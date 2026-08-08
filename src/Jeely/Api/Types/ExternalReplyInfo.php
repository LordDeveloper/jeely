<?php

namespace Jeely\Api\Types;

/**
 * @class ExternalReplyInfo
 * @description This object contains information about a message that is being replied to, which may come from another chat or forum topic.
 *
 * @method MessageOrigin getOrigin() Origin of the message replied to by the given message
 * @method Chat getChat() Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
 * @method int getMessageId() Optional. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
 * @method LinkPreviewOptions getLinkPreviewOptions() Optional. Options used for link preview generation for the original message, if it is a text message
 * @method Animation getAnimation() Optional. Message is an animation, information about the animation
 * @method Audio getAudio() Optional. Message is an audio file, information about the file
 * @method Document getDocument() Optional. Message is a general file, information about the file
 * @method LivePhoto getLivePhoto() Optional. Message is a live photo, information about the live photo
 * @method PaidMediaInfo getPaidMedia() Optional. Message contains paid media; information about the paid media
 * @method PhotoSize[] getPhoto() Optional. Message is a photo, available sizes of the photo
 * @method Sticker getSticker() Optional. Message is a sticker, information about the sticker
 * @method Story getStory() Optional. Message is a forwarded story
 * @method Video getVideo() Optional. Message is a video, information about the video
 * @method VideoNote getVideoNote() Optional. Message is a video note, information about the video message
 * @method Voice getVoice() Optional. Message is a voice message, information about the file
 * @method bool getHasMediaSpoiler() Optional. True, if the message media is covered by a spoiler animation
 * @method Checklist getChecklist() Optional. Message is a checklist
 * @method Contact getContact() Optional. Message is a shared contact, information about the contact
 * @method Dice getDice() Optional. Message is a dice with random value
 * @method Game getGame() Optional. Message is a game, information about the game. More about games »
 * @method Giveaway getGiveaway() Optional. Message is a scheduled giveaway, information about the giveaway
 * @method GiveawayWinners getGiveawayWinners() Optional. A giveaway with public winners was completed
 * @method Invoice getInvoice() Optional. Message is an invoice for a payment, information about the invoice. More about payments »
 * @method Location getLocation() Optional. Message is a shared location, information about the location
 * @method Poll getPoll() Optional. Message is a native poll, information about the poll
 * @method Venue getVenue() Optional. Message is a venue, information about the venue
 *
 * @method bool isOrigin()
 * @method bool isChat()
 * @method bool isMessageId()
 * @method bool isLinkPreviewOptions()
 * @method bool isAnimation()
 * @method bool isAudio()
 * @method bool isDocument()
 * @method bool isLivePhoto()
 * @method bool isPaidMedia()
 * @method bool isPhoto()
 * @method bool isSticker()
 * @method bool isStory()
 * @method bool isVideo()
 * @method bool isVideoNote()
 * @method bool isVoice()
 * @method bool isHasMediaSpoiler()
 * @method bool isChecklist()
 * @method bool isContact()
 * @method bool isDice()
 * @method bool isGame()
 * @method bool isGiveaway()
 * @method bool isGiveawayWinners()
 * @method bool isInvoice()
 * @method bool isLocation()
 * @method bool isPoll()
 * @method bool isVenue()
 *
 * @method $this setOrigin()
 * @method $this setChat()
 * @method $this setMessageId()
 * @method $this setLinkPreviewOptions()
 * @method $this setAnimation()
 * @method $this setAudio()
 * @method $this setDocument()
 * @method $this setLivePhoto()
 * @method $this setPaidMedia()
 * @method $this setPhoto()
 * @method $this setSticker()
 * @method $this setStory()
 * @method $this setVideo()
 * @method $this setVideoNote()
 * @method $this setVoice()
 * @method $this setHasMediaSpoiler()
 * @method $this setChecklist()
 * @method $this setContact()
 * @method $this setDice()
 * @method $this setGame()
 * @method $this setGiveaway()
 * @method $this setGiveawayWinners()
 * @method $this setInvoice()
 * @method $this setLocation()
 * @method $this setPoll()
 * @method $this setVenue()
 *
 * @method $this unsetOrigin()
 * @method $this unsetChat()
 * @method $this unsetMessageId()
 * @method $this unsetLinkPreviewOptions()
 * @method $this unsetAnimation()
 * @method $this unsetAudio()
 * @method $this unsetDocument()
 * @method $this unsetLivePhoto()
 * @method $this unsetPaidMedia()
 * @method $this unsetPhoto()
 * @method $this unsetSticker()
 * @method $this unsetStory()
 * @method $this unsetVideo()
 * @method $this unsetVideoNote()
 * @method $this unsetVoice()
 * @method $this unsetHasMediaSpoiler()
 * @method $this unsetChecklist()
 * @method $this unsetContact()
 * @method $this unsetDice()
 * @method $this unsetGame()
 * @method $this unsetGiveaway()
 * @method $this unsetGiveawayWinners()
 * @method $this unsetInvoice()
 * @method $this unsetLocation()
 * @method $this unsetPoll()
 * @method $this unsetVenue()
 *
 * @property MessageOrigin $origin Origin of the message replied to by the given message
 * @property Chat $chat Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
 * @property int $message_id Optional. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
 * @property LinkPreviewOptions $link_preview_options Optional. Options used for link preview generation for the original message, if it is a text message
 * @property Animation $animation Optional. Message is an animation, information about the animation
 * @property Audio $audio Optional. Message is an audio file, information about the file
 * @property Document $document Optional. Message is a general file, information about the file
 * @property LivePhoto $live_photo Optional. Message is a live photo, information about the live photo
 * @property PaidMediaInfo $paid_media Optional. Message contains paid media; information about the paid media
 * @property PhotoSize[] $photo Optional. Message is a photo, available sizes of the photo
 * @property Sticker $sticker Optional. Message is a sticker, information about the sticker
 * @property Story $story Optional. Message is a forwarded story
 * @property Video $video Optional. Message is a video, information about the video
 * @property VideoNote $video_note Optional. Message is a video note, information about the video message
 * @property Voice $voice Optional. Message is a voice message, information about the file
 * @property bool $has_media_spoiler Optional. True, if the message media is covered by a spoiler animation
 * @property Checklist $checklist Optional. Message is a checklist
 * @property Contact $contact Optional. Message is a shared contact, information about the contact
 * @property Dice $dice Optional. Message is a dice with random value
 * @property Game $game Optional. Message is a game, information about the game. More about games »
 * @property Giveaway $giveaway Optional. Message is a scheduled giveaway, information about the giveaway
 * @property GiveawayWinners $giveaway_winners Optional. A giveaway with public winners was completed
 * @property Invoice $invoice Optional. Message is an invoice for a payment, information about the invoice. More about payments »
 * @property Location $location Optional. Message is a shared location, information about the location
 * @property Poll $poll Optional. Message is a native poll, information about the poll
 * @property Venue $venue Optional. Message is a venue, information about the venue
 *
 * @see https://core.telegram.org/bots/api#externalreplyinfo
 */
class ExternalReplyInfo extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'origin' => 'MessageOrigin',
        'chat' => 'Chat',
        'message_id' => 'int',
        'link_preview_options' => 'LinkPreviewOptions',
        'animation' => 'Animation',
        'audio' => 'Audio',
        'document' => 'Document',
        'live_photo' => 'LivePhoto',
        'paid_media' => 'PaidMediaInfo',
        'photo' => 'PhotoSize[]',
        'sticker' => 'Sticker',
        'story' => 'Story',
        'video' => 'Video',
        'video_note' => 'VideoNote',
        'voice' => 'Voice',
        'has_media_spoiler' => 'bool',
        'checklist' => 'Checklist',
        'contact' => 'Contact',
        'dice' => 'Dice',
        'game' => 'Game',
        'giveaway' => 'Giveaway',
        'giveaway_winners' => 'GiveawayWinners',
        'invoice' => 'Invoice',
        'location' => 'Location',
        'poll' => 'Poll',
        'venue' => 'Venue',
    ];
}
