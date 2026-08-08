<?php

namespace Jeely\Api\Types;

/**
 * @class LinkPreviewOptions
 * @description Describes the options used for link preview generation.
 *
 * @method bool getIsDisabled() Optional. True, if the link preview is disabled
 * @method string getUrl() Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used.
 * @method bool getPreferSmallMedia() Optional. True, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
 * @method bool getPreferLargeMedia() Optional. True, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
 * @method bool getShowAboveText() Optional. True, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text
 *
 * @method bool isIsDisabled()
 * @method bool isUrl()
 * @method bool isPreferSmallMedia()
 * @method bool isPreferLargeMedia()
 * @method bool isShowAboveText()
 *
 * @method $this setIsDisabled()
 * @method $this setUrl()
 * @method $this setPreferSmallMedia()
 * @method $this setPreferLargeMedia()
 * @method $this setShowAboveText()
 *
 * @method $this unsetIsDisabled()
 * @method $this unsetUrl()
 * @method $this unsetPreferSmallMedia()
 * @method $this unsetPreferLargeMedia()
 * @method $this unsetShowAboveText()
 *
 * @property bool $is_disabled Optional. True, if the link preview is disabled
 * @property string $url Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used.
 * @property bool $prefer_small_media Optional. True, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
 * @property bool $prefer_large_media Optional. True, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
 * @property bool $show_above_text Optional. True, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text
 *
 * @see https://core.telegram.org/bots/api#linkpreviewoptions
 */
class LinkPreviewOptions extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'is_disabled' => 'bool',
        'url' => 'string',
        'prefer_small_media' => 'bool',
        'prefer_large_media' => 'bool',
        'show_above_text' => 'bool',
    ];
}
