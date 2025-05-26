<?php

namespace Jeely\Concerns;

use Exception;

/**
 * Summary of InteractsWithFile
 * 
 * @property string $file_url
 * 
 * @method string getFileUrl()
 * @method bool isFileUrl()
 * @method $this setFileUrl()
 * @method $this unsetFileUrl()
 */
trait InteractsWithFile
{
    protected function bootInteractsWithFile()
    {
        if ($filePath = $this->_getProperty('file_path')) {
            $this->_setProperty('file_url', $this->telegram->getFileUrl($filePath));
        }
    }

    public function download(string $destination, ?callable $progress = null)
    {
        if (! $fileUrl = $this->getFileUrl()) {
            throw new Exception('File URL is not set.');
        }

        $resource = fopen($destination, 'w');

        try {
            $this->telegram->getBrowser()->get($fileUrl, [
                'sink' => $resource,
                'progress' => function (
                    $downloadSize, 
                    $downloaded, 
                    $uploadSize, 
                    $uploaded
                ) use ($progress) {
                    if ($progress) {
                        call_user_func($progress, $downloadSize, $downloaded);
                    }
                },
            ]);
        } finally {
            if (is_resource($resource)) {
                fclose($resource);
            }
        }
    }
}