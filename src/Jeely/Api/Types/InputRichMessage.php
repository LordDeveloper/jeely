<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichMessage
 * @description Describes a rich message to be sent. Exactly one of the fields html, markdown, or blocks must be used.
 *
 * @method InputRichBlock[] getBlocks() Optional. Content of the rich message to send described as a list of blocks
 * @method string getHtml() Optional. Content of the rich message to send described using HTML formatting. See rich message formatting options for more details. Use media field to specify the media used in the message.
 * @method string getMarkdown() Optional. Content of the rich message to send described using Markdown formatting. See rich message formatting options for more details. Use media field to specify the media used in the message.
 * @method InputRichMessageMedia[] getMedia() Optional. List of media that are specified in the markdown or html fields using tg://photo?id=, tg://video?id=, and tg://audio?id= links
 * @method bool getIsRtl() Optional. Pass True if the rich message must be shown right-to-left
 * @method bool getSkipEntityDetection() Optional. Pass True to skip automatic detection of entities (e.g., URLs, email addresses, username mentions, hashtags, cashtags, bot commands, or phone numbers) in the text
 *
 * @method bool isBlocks()
 * @method bool isHtml()
 * @method bool isMarkdown()
 * @method bool isMedia()
 * @method bool isIsRtl()
 * @method bool isSkipEntityDetection()
 *
 * @method $this setBlocks()
 * @method $this setHtml()
 * @method $this setMarkdown()
 * @method $this setMedia()
 * @method $this setIsRtl()
 * @method $this setSkipEntityDetection()
 *
 * @method $this unsetBlocks()
 * @method $this unsetHtml()
 * @method $this unsetMarkdown()
 * @method $this unsetMedia()
 * @method $this unsetIsRtl()
 * @method $this unsetSkipEntityDetection()
 *
 * @property InputRichBlock[] $blocks Optional. Content of the rich message to send described as a list of blocks
 * @property string $html Optional. Content of the rich message to send described using HTML formatting. See rich message formatting options for more details. Use media field to specify the media used in the message.
 * @property string $markdown Optional. Content of the rich message to send described using Markdown formatting. See rich message formatting options for more details. Use media field to specify the media used in the message.
 * @property InputRichMessageMedia[] $media Optional. List of media that are specified in the markdown or html fields using tg://photo?id=, tg://video?id=, and tg://audio?id= links
 * @property bool $is_rtl Optional. Pass True if the rich message must be shown right-to-left
 * @property bool $skip_entity_detection Optional. Pass True to skip automatic detection of entities (e.g., URLs, email addresses, username mentions, hashtags, cashtags, bot commands, or phone numbers) in the text
 *
 * @see https://core.telegram.org/bots/api#inputrichmessage
 */
class InputRichMessage extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'blocks' => 'InputRichBlock[]',
        'html' => 'string',
        'markdown' => 'string',
        'media' => 'InputRichMessageMedia[]',
        'is_rtl' => 'bool',
        'skip_entity_detection' => 'bool',
    ];
}
