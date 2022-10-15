<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class InputMedia
 * @description This object represents the content of a media message to be sent. It should be one of
 *
 * @mixin InputMediaAnimation
 * @mixin InputMediaAudio
 * @mixin InputMediaDocument
 * @mixin InputMediaPhoto
 * @mixin InputMediaVideo
 *
 * @see https://core.telegram.org/bots/api#inputmedia
 */
class InputMedia extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        InputMediaAnimation::class,
        InputMediaAudio::class,
        InputMediaDocument::class,
        InputMediaPhoto::class,
        InputMediaVideo::class,
    ];
}