<?php

namespace Jeely\Mixins;

trait InteractsWithChatMemberUpdated
{
    public function status(): ?string
    {
        return $this->new_chat_member->status ?? null;
    }

    public function previousStatus(): ?string
    {
        return $this->old_chat_member->status ?? null;
    }

    public function joined(): bool
    {
        $old = $this->previousStatus();
        $new = $this->status();

        return in_array($old, ['left', 'kicked', null], true)
            && ! in_array($new, ['left', 'kicked', null], true);
    }

    public function left(): bool
    {
        $new = $this->status();

        return in_array($new, ['left', 'kicked'], true)
            && ! in_array($this->previousStatus(), ['left', 'kicked'], true);
    }

    public function blockedBot(): bool
    {
        return ($this->chat->type ?? null) === 'private'
            && $this->status() === 'kicked';
    }

    public function unblockedBot(): bool
    {
        return ($this->chat->type ?? null) === 'private'
            && $this->previousStatus() === 'kicked'
            && $this->status() === 'member';
    }
}
