<?php 

namespace Jeely\Concerns;

/**
 * Summary of InteractsWithMedia
 */
trait InteractsWithMedia
{
    public function file(... $args)
    {
        return $this->telegram->getFile([
            ... $args,
            'file_id' => $this->file_id,
        ]);
    }
}

