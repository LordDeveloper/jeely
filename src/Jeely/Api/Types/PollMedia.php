<?php

namespace Jeely\Api\Types;

/**
 * @class PollMedia
 * @description At most one of the optional fields can be present in any given object.
 *
 * @method Animation getAnimation() Optional. Media is an animation, information about the animation
 * @method Audio getAudio() Optional. Media is an audio file, information about the file; currently, can't be received in a poll option
 * @method Document getDocument() Optional. Media is a general file, information about the file; currently, can't be received in a poll option
 * @method Link getLink() Optional. The HTTP link attached to the poll option
 * @method LivePhoto getLivePhoto() Optional. Media is a live photo, information about the live photo
 * @method Location getLocation() Optional. Media is a shared location, information about the location
 * @method PhotoSize[] getPhoto() Optional. Media is a photo, available sizes of the photo
 * @method Sticker getSticker() Optional. Media is a sticker, information about the sticker; currently, for poll options only
 * @method Venue getVenue() Optional. Media is a venue, information about the venue
 * @method Video getVideo() Optional. Media is a video, information about the video
 *
 * @method bool isAnimation()
 * @method bool isAudio()
 * @method bool isDocument()
 * @method bool isLink()
 * @method bool isLivePhoto()
 * @method bool isLocation()
 * @method bool isPhoto()
 * @method bool isSticker()
 * @method bool isVenue()
 * @method bool isVideo()
 *
 * @method $this setAnimation()
 * @method $this setAudio()
 * @method $this setDocument()
 * @method $this setLink()
 * @method $this setLivePhoto()
 * @method $this setLocation()
 * @method $this setPhoto()
 * @method $this setSticker()
 * @method $this setVenue()
 * @method $this setVideo()
 *
 * @method $this unsetAnimation()
 * @method $this unsetAudio()
 * @method $this unsetDocument()
 * @method $this unsetLink()
 * @method $this unsetLivePhoto()
 * @method $this unsetLocation()
 * @method $this unsetPhoto()
 * @method $this unsetSticker()
 * @method $this unsetVenue()
 * @method $this unsetVideo()
 *
 * @property Animation $animation Optional. Media is an animation, information about the animation
 * @property Audio $audio Optional. Media is an audio file, information about the file; currently, can't be received in a poll option
 * @property Document $document Optional. Media is a general file, information about the file; currently, can't be received in a poll option
 * @property Link $link Optional. The HTTP link attached to the poll option
 * @property LivePhoto $live_photo Optional. Media is a live photo, information about the live photo
 * @property Location $location Optional. Media is a shared location, information about the location
 * @property PhotoSize[] $photo Optional. Media is a photo, available sizes of the photo
 * @property Sticker $sticker Optional. Media is a sticker, information about the sticker; currently, for poll options only
 * @property Venue $venue Optional. Media is a venue, information about the venue
 * @property Video $video Optional. Media is a video, information about the video
 *
 * @see https://core.telegram.org/bots/api#pollmedia
 */
class PollMedia extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'animation' => 'Animation',
        'audio' => 'Audio',
        'document' => 'Document',
        'link' => 'Link',
        'live_photo' => 'LivePhoto',
        'location' => 'Location',
        'photo' => 'PhotoSize[]',
        'sticker' => 'Sticker',
        'venue' => 'Venue',
        'video' => 'Video',
    ];
}
