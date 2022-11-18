<?php

namespace Jeely\Traits;

trait Notifiable
{

    public function notify($text, ... $args)
    {
        return $this->telegram->sendMessage(array_merge($args, [
            'chat_id' => $this->id,
            'text' => $text,
        ]));
    }
}