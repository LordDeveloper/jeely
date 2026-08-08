<?php

namespace Jeely\Api\Types;

/**
 * @class UserProfileAudios
 * @description This object represents the audios displayed on a user's profile.
 *
 * @method int getTotalCount() Total number of profile audios for the target user
 * @method Audio[] getAudios() Requested profile audios
 *
 * @method bool isTotalCount()
 * @method bool isAudios()
 *
 * @method $this setTotalCount()
 * @method $this setAudios()
 *
 * @method $this unsetTotalCount()
 * @method $this unsetAudios()
 *
 * @property int $total_count Total number of profile audios for the target user
 * @property Audio[] $audios Requested profile audios
 *
 * @see https://core.telegram.org/bots/api#userprofileaudios
 */
class UserProfileAudios extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'total_count' => 'int',
        'audios' => 'Audio[]',
    ];
}
