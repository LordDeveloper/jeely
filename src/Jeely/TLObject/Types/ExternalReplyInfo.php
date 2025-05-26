<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ExternalReplyInfo
* @description This object contains information about a message that is being replied to, which may come from another chat or forum topic.
*
* @property	MessageOrigin $origin Origin of the message replied to by the given message
* @method	MessageOrigin getOrigin() Origin of the message replied to by the given message
* @method	bool isOrigin()
* @method	$this setOrigin()
* @method	$this unsetOrigin()

* @property	Chat $chat Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
* @method	Chat getChat() Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
* @method	bool isChat()
* @method	$this setChat()
* @method	$this unsetChat()

* @property	int $message_id Optional. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
* @method	int getMessageId() Optional. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
* @method	bool isMessageId()
* @method	$this setMessageId()
* @method	$this unsetMessageId()

* @property	LinkPreviewOptions $link_preview_options Optional. Options used for link preview generation for the original message, if it is a text message
* @method	LinkPreviewOptions getLinkPreviewOptions() Optional. Options used for link preview generation for the original message, if it is a text message
* @method	bool isLinkPreviewOptions()
* @method	$this setLinkPreviewOptions()
* @method	$this unsetLinkPreviewOptions()

* @property	Animation $animation Optional. Message is an animation, information about the animation
* @method	Animation getAnimation() Optional. Message is an animation, information about the animation
* @method	bool isAnimation()
* @method	$this setAnimation()
* @method	$this unsetAnimation()

* @property	Audio $audio Optional. Message is an audio file, information about the file
* @method	Audio getAudio() Optional. Message is an audio file, information about the file
* @method	bool isAudio()
* @method	$this setAudio()
* @method	$this unsetAudio()

* @property	Document $document Optional. Message is a general file, information about the file
* @method	Document getDocument() Optional. Message is a general file, information about the file
* @method	bool isDocument()
* @method	$this setDocument()
* @method	$this unsetDocument()

* @property	PaidMediaInfo $paid_media Optional. Message contains paid media; information about the paid media
* @method	PaidMediaInfo getPaidMedia() Optional. Message contains paid media; information about the paid media
* @method	bool isPaidMedia()
* @method	$this setPaidMedia()
* @method	$this unsetPaidMedia()

* @property	PhotoSize[] $photo Optional. Message is a photo, available sizes of the photo
* @method	PhotoSize[] getPhoto() Optional. Message is a photo, available sizes of the photo
* @method	bool isPhoto()
* @method	$this setPhoto()
* @method	$this unsetPhoto()

* @property	Sticker $sticker Optional. Message is a sticker, information about the sticker
* @method	Sticker getSticker() Optional. Message is a sticker, information about the sticker
* @method	bool isSticker()
* @method	$this setSticker()
* @method	$this unsetSticker()

* @property	Story $story Optional. Message is a forwarded story
* @method	Story getStory() Optional. Message is a forwarded story
* @method	bool isStory()
* @method	$this setStory()
* @method	$this unsetStory()

* @property	Video $video Optional. Message is a video, information about the video
* @method	Video getVideo() Optional. Message is a video, information about the video
* @method	bool isVideo()
* @method	$this setVideo()
* @method	$this unsetVideo()

* @property	VideoNote $video_note Optional. Message is a video note, information about the video message
* @method	VideoNote getVideoNote() Optional. Message is a video note, information about the video message
* @method	bool isVideoNote()
* @method	$this setVideoNote()
* @method	$this unsetVideoNote()

* @property	Voice $voice Optional. Message is a voice message, information about the file
* @method	Voice getVoice() Optional. Message is a voice message, information about the file
* @method	bool isVoice()
* @method	$this setVoice()
* @method	$this unsetVoice()

* @property	bool $has_media_spoiler Optional. True, if the message media is covered by a spoiler animation
* @method	bool getHasMediaSpoiler() Optional. True, if the message media is covered by a spoiler animation
* @method	bool isHasMediaSpoiler()
* @method	$this setHasMediaSpoiler()
* @method	$this unsetHasMediaSpoiler()

* @property	Contact $contact Optional. Message is a shared contact, information about the contact
* @method	Contact getContact() Optional. Message is a shared contact, information about the contact
* @method	bool isContact()
* @method	$this setContact()
* @method	$this unsetContact()

* @property	Dice $dice Optional. Message is a dice with random value
* @method	Dice getDice() Optional. Message is a dice with random value
* @method	bool isDice()
* @method	$this setDice()
* @method	$this unsetDice()

* @property	Game $game Optional. Message is a game, information about the game. More about games »
* @method	Game getGame() Optional. Message is a game, information about the game. More about games »
* @method	bool isGame()
* @method	$this setGame()
* @method	$this unsetGame()

* @property	Giveaway $giveaway Optional. Message is a scheduled giveaway, information about the giveaway
* @method	Giveaway getGiveaway() Optional. Message is a scheduled giveaway, information about the giveaway
* @method	bool isGiveaway()
* @method	$this setGiveaway()
* @method	$this unsetGiveaway()

* @property	GiveawayWinners $giveaway_winners Optional. A giveaway with public winners was completed
* @method	GiveawayWinners getGiveawayWinners() Optional. A giveaway with public winners was completed
* @method	bool isGiveawayWinners()
* @method	$this setGiveawayWinners()
* @method	$this unsetGiveawayWinners()

* @property	Invoice $invoice Optional. Message is an invoice for a payment, information about the invoice. More about payments »
* @method	Invoice getInvoice() Optional. Message is an invoice for a payment, information about the invoice. More about payments »
* @method	bool isInvoice()
* @method	$this setInvoice()
* @method	$this unsetInvoice()

* @property	Location $location Optional. Message is a shared location, information about the location
* @method	Location getLocation() Optional. Message is a shared location, information about the location
* @method	bool isLocation()
* @method	$this setLocation()
* @method	$this unsetLocation()

* @property	Poll $poll Optional. Message is a native poll, information about the poll
* @method	Poll getPoll() Optional. Message is a native poll, information about the poll
* @method	bool isPoll()
* @method	$this setPoll()
* @method	$this unsetPoll()

* @property	Venue $venue Optional. Message is a venue, information about the venue
* @method	Venue getVenue() Optional. Message is a venue, information about the venue
* @method	bool isVenue()
* @method	$this setVenue()
* @method	$this unsetVenue()

*/

class ExternalReplyInfo extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'origin'=> 'MessageOrigin',
		'chat'=> 'Chat',
		'message_id'=> 'int',
		'link_preview_options'=> 'LinkPreviewOptions',
		'animation'=> 'Animation',
		'audio'=> 'Audio',
		'document'=> 'Document',
		'paid_media'=> 'PaidMediaInfo',
		'photo'=> 'PhotoSize[]',
		'sticker'=> 'Sticker',
		'story'=> 'Story',
		'video'=> 'Video',
		'video_note'=> 'VideoNote',
		'voice'=> 'Voice',
		'has_media_spoiler'=> 'bool',
		'contact'=> 'Contact',
		'dice'=> 'Dice',
		'game'=> 'Game',
		'giveaway'=> 'Giveaway',
		'giveaway_winners'=> 'GiveawayWinners',
		'invoice'=> 'Invoice',
		'location'=> 'Location',
		'poll'=> 'Poll',
		'venue'=> 'Venue',
	];

}