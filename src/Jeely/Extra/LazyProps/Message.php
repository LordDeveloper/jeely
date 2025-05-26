<?php

namespace Jeely\Extra\LazyProps;

use Jeely\TLObject;

class Message extends TLObject
{
    const JSON_PROPERTY_MAP = [
        'is_media' => 'bool',
        'media_type' => 'string',
        'file_id' => 'string',
    ];
}
