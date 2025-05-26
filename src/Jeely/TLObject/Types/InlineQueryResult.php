<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\InlineQueryResultCachedAudio;
use Jeely\TLObject\Types\InlineQueryResultCachedDocument;
use Jeely\TLObject\Types\InlineQueryResultCachedGif;
use Jeely\TLObject\Types\InlineQueryResultCachedMpeg4Gif;
use Jeely\TLObject\Types\InlineQueryResultCachedPhoto;
use Jeely\TLObject\Types\InlineQueryResultCachedSticker;
use Jeely\TLObject\Types\InlineQueryResultCachedVideo;
use Jeely\TLObject\Types\InlineQueryResultCachedVoice;
use Jeely\TLObject\Types\InlineQueryResultArticle;
use Jeely\TLObject\Types\InlineQueryResultAudio;
use Jeely\TLObject\Types\InlineQueryResultContact;
use Jeely\TLObject\Types\InlineQueryResultGame;
use Jeely\TLObject\Types\InlineQueryResultDocument;
use Jeely\TLObject\Types\InlineQueryResultGif;
use Jeely\TLObject\Types\InlineQueryResultLocation;
use Jeely\TLObject\Types\InlineQueryResultMpeg4Gif;
use Jeely\TLObject\Types\InlineQueryResultPhoto;
use Jeely\TLObject\Types\InlineQueryResultVenue;
use Jeely\TLObject\Types\InlineQueryResultVideo;
use Jeely\TLObject\Types\InlineQueryResultVoice;


/**
* @class InlineQueryResult
* @description This object represents one result of an inline query. Telegram clients currently support results of the following 20 types:
*
*/

class InlineQueryResult extends TLObject
{
	const JSON_PROPERTY_MAP = [
		InlineQueryResultCachedAudio::class,
		InlineQueryResultCachedDocument::class,
		InlineQueryResultCachedGif::class,
		InlineQueryResultCachedMpeg4Gif::class,
		InlineQueryResultCachedPhoto::class,
		InlineQueryResultCachedSticker::class,
		InlineQueryResultCachedVideo::class,
		InlineQueryResultCachedVoice::class,
		InlineQueryResultArticle::class,
		InlineQueryResultAudio::class,
		InlineQueryResultContact::class,
		InlineQueryResultGame::class,
		InlineQueryResultDocument::class,
		InlineQueryResultGif::class,
		InlineQueryResultLocation::class,
		InlineQueryResultMpeg4Gif::class,
		InlineQueryResultPhoto::class,
		InlineQueryResultVenue::class,
		InlineQueryResultVideo::class,
		InlineQueryResultVoice::class,
	];

}