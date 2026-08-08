<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetBusinessAccountProfilePhoto
 * @description Changes the profile photo of a managed business account. Requires the can_edit_profile_photo business bot right. Returns True on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection
 * @property InputPrilePhoto $photo The new profile photo to set
 * @property bool $is_public Pass True to set the public photo, which will be visible even if the main photo is hidden by the business account's privacy settings. An account can have only one public photo.
 *
 * @see https://core.telegram.org/bots/api#setbusinessaccountprofilephoto
 */
class SetBusinessAccountProfilePhoto extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
