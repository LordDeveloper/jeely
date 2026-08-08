<?php

namespace Jeely\Api\Types;

/**
 * @class PollAnswer
 * @description This object represents an answer of a user in a non-anonymous poll.
 *
 * @method string getPollId() Unique poll identifier
 * @method Chat getVoterChat() Optional. The chat that changed the answer to the poll, if the voter is anonymous
 * @method User getUser() Optional. The user that changed the answer to the poll, if the voter isn't anonymous
 * @method int[] getOptionIds() 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
 * @method string[] getOptionPersistentIds() Persistent identifiers of the chosen answer options. May be empty if the vote was retracted.
 *
 * @method bool isPollId()
 * @method bool isVoterChat()
 * @method bool isUser()
 * @method bool isOptionIds()
 * @method bool isOptionPersistentIds()
 *
 * @method $this setPollId()
 * @method $this setVoterChat()
 * @method $this setUser()
 * @method $this setOptionIds()
 * @method $this setOptionPersistentIds()
 *
 * @method $this unsetPollId()
 * @method $this unsetVoterChat()
 * @method $this unsetUser()
 * @method $this unsetOptionIds()
 * @method $this unsetOptionPersistentIds()
 *
 * @property string $poll_id Unique poll identifier
 * @property Chat $voter_chat Optional. The chat that changed the answer to the poll, if the voter is anonymous
 * @property User $user Optional. The user that changed the answer to the poll, if the voter isn't anonymous
 * @property int[] $option_ids 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
 * @property string[] $option_persistent_ids Persistent identifiers of the chosen answer options. May be empty if the vote was retracted.
 *
 * @see https://core.telegram.org/bots/api#pollanswer
 */
class PollAnswer extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'poll_id' => 'string',
        'voter_chat' => 'Chat',
        'user' => 'User',
        'option_ids' => 'int[]',
        'option_persistent_ids' => 'string[]',
    ];
}
