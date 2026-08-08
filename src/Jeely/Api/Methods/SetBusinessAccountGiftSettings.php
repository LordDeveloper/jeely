<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetBusinessAccountGiftSettings
 * @description Changes the privacy settings pertaining to incoming gifts in a managed business account. Requires the can_change_gift_settings business bot right. Returns True on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection
 * @property bool $show_gift_button Pass True if a button for sending a gift to the user or by the business account must always be shown in the input field
 * @property AcceptedGiftTypes $accepted_gift_types Types of gifts accepted by the business account
 *
 * @see https://core.telegram.org/bots/api#setbusinessaccountgiftsettings
 */
class SetBusinessAccountGiftSettings extends MethodDefinition implements MethodDefinitionInterface
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
