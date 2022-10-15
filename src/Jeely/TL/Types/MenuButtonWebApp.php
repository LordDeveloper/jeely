<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class MenuButtonWebApp
 * @description Represents a menu button, which launches a Web App.
 *
 * @method string getType() Type of the button, must be web_app
 * @method string getText() Text on the button
 * @method WebAppInfo getWebApp() Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery.
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isWebApp()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setWebApp()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetWebApp()
 *
 * @property string $type Type of the button, must be web_app
 * @property string $text Text on the button
 * @property WebAppInfo $web_app Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery.
 *
 * @see https://core.telegram.org/bots/api#menubuttonwebapp
 */
class MenuButtonWebApp extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'string',
        'web_app' => 'WebAppInfo',
    ];
}