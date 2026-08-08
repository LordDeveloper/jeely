<?php

namespace Jeely\Api\Types;

/**
 * @class WriteAccessAllowed
 * @description This object represents a service message about a user allowing a bot to write messages after adding it to the attachment menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess.
 *
 * @method bool getFromRequest() Optional. True, if the access was granted after the user accepted an explicit request from a Web App sent by the method requestWriteAccess
 * @method string getWebAppName() Optional. Name of the Web App, if the access was granted when the Web App was launched from a link
 * @method bool getFromAttachmentMenu() Optional. True, if the access was granted when the bot was added to the attachment or side menu
 *
 * @method bool isFromRequest()
 * @method bool isWebAppName()
 * @method bool isFromAttachmentMenu()
 *
 * @method $this setFromRequest()
 * @method $this setWebAppName()
 * @method $this setFromAttachmentMenu()
 *
 * @method $this unsetFromRequest()
 * @method $this unsetWebAppName()
 * @method $this unsetFromAttachmentMenu()
 *
 * @property bool $from_request Optional. True, if the access was granted after the user accepted an explicit request from a Web App sent by the method requestWriteAccess
 * @property string $web_app_name Optional. Name of the Web App, if the access was granted when the Web App was launched from a link
 * @property bool $from_attachment_menu Optional. True, if the access was granted when the bot was added to the attachment or side menu
 *
 * @see https://core.telegram.org/bots/api#writeaccessallowed
 */
class WriteAccessAllowed extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'from_request' => 'bool',
        'web_app_name' => 'string',
        'from_attachment_menu' => 'bool',
    ];
}
