<?php

namespace Jeely\Api\Types;

/**
 * @class InputFile
 * @description This object represents the contents of a file to be uploaded. Must be posted using multipart/form-data in the usual way that files are uploaded via the browser.
 *
 *
 * @see https://core.telegram.org/bots/api#inputfile
 */
class InputFile extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [];
}
