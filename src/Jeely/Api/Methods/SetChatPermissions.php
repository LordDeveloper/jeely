<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetChatPermissions
 * @description Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the can_restrict_members administrator rights. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup in the format ＠username
 * @property ChatPermissions $permissions A JSON-serialized object for new default chat permissions
 * @property bool $use_independent_chat_permissions Pass True if chat permissions are set independently. Otherwise, the can_send_other_messages and can_add_web_page_previews permissions will imply the can_send_messages, can_send_audios, can_send_documents, can_send_photos, can_send_videos, can_send_video_notes, and can_send_voice_notes permissions; the can_send_polls permission will imply the can_send_messages permission.
 *
 * @see https://core.telegram.org/bots/api#setchatpermissions
 */
class SetChatPermissions extends MethodDefinition implements MethodDefinitionInterface
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
