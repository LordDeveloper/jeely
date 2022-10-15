<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class InlineQueryResult
 * @description This object represents one result of an inline query. Telegram clients currently support results of the following 20 types:
 *
 * @mixin InlineQueryResultArticle
 * @mixin InlineQueryResultAudio
 * @mixin InlineQueryResultCachedAudio
 * @mixin InlineQueryResultCachedDocument
 * @mixin InlineQueryResultCachedGif
 * @mixin InlineQueryResultCachedMpeg4Gif
 * @mixin InlineQueryResultCachedPhoto
 * @mixin InlineQueryResultCachedSticker
 * @mixin InlineQueryResultCachedVideo
 * @mixin InlineQueryResultCachedVoice
 * @mixin InlineQueryResultContact
 * @mixin InlineQueryResultDocument
 * @mixin InlineQueryResultGame
 * @mixin InlineQueryResultGif
 * @mixin InlineQueryResultLocation
 * @mixin InlineQueryResultMpeg4Gif
 * @mixin InlineQueryResultPhoto
 * @mixin InlineQueryResultVenue
 * @mixin InlineQueryResultVideo
 * @mixin InlineQueryResultVoice
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresult
 */
class InlineQueryResult extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        InlineQueryResultArticle::class,
        InlineQueryResultAudio::class,
        InlineQueryResultCachedAudio::class,
        InlineQueryResultCachedDocument::class,
        InlineQueryResultCachedGif::class,
        InlineQueryResultCachedMpeg4Gif::class,
        InlineQueryResultCachedPhoto::class,
        InlineQueryResultCachedSticker::class .
        InlineQueryResultCachedVideo::class,
        InlineQueryResultCachedVoice::class,
        InlineQueryResultContact::class,
        InlineQueryResultDocument::class,
        InlineQueryResultGame::class,
        InlineQueryResultGif::class,
        InlineQueryResultLocation::class,
        InlineQueryResultMpeg4Gif::class,
        InlineQueryResultPhoto::class,
        InlineQueryResultVenue::class,
        InlineQueryResultVideo::class,
        InlineQueryResultVoice::class,
    ];
}