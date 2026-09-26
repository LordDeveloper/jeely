<?php

namespace Jeely\Mixins;

trait InteractsWithFile
{
    protected function booted(): void
    {
        $path = $this->file_path ?? null;
        $telegram = $this->telegram();

        if (! is_string($path) || $path === '' || $telegram === null) {
            return;
        }

        $this['file_url'] = rtrim($telegram->getBaseUri(), '/')
            . '/file/bot'
            . $telegram->getToken()
            . '/'
            . ltrim($path, '/');
    }
}
