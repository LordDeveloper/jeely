<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class TransferGift
 * @description Transfers an owned unique gift to another user. Requires the can_transfer_and_upgrade_gifts business bot right. Requires can_transfer_stars business bot right if the transfer is paid. Returns True on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection
 * @property string $owned_gift_id Unique identifier of the regular gift that should be transferred
 * @property int $new_owner_chat_id Unique identifier of the chat which will own the gift. The chat must be active in the last 24 hours.
 * @property int $star_count The amount of Telegram Stars that will be paid for the transfer from the business account balance. If positive, then the can_transfer_stars business bot right is required.
 *
 * @see https://core.telegram.org/bots/api#transfergift
 */
class TransferGift extends MethodDefinition implements MethodDefinitionInterface
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
