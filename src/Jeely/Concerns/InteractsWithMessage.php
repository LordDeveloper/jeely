<?php

namespace Jeely\Concerns;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\TLObject\Types\Error;
use Jeely\TLObject\Types\InputMedia;
use Jeely\TLObject\Types\Message;
use Jeely\TLObject\Types\MessageId;
use Jeely\Tools\Constant;

/**
 * Summary of InteractsWithMessage
 * 
 * @property bool $is_media
 * @property string $file_id
 * @property string $media_type
 * 
 * @method bool isIsMedia()
 * @method bool isFileId()
 * @method bool isMediaType()
 * 
 * @method $this setIsMedia()
 * @method $this setFileId()
 * @method $this setMediaType()
 * 
 * @method $this unsetIsMedia()
 * @method $this unsetFileId()
 * @method $this unsetMediaType()
 * 
 * @method bool getIsMedia()
 * @method string getFileId()
 * @method string getMediaType()
 */
trait InteractsWithMessage
{

    public function bootInteractsWithMessage()
    {
        $this->_setProperty('is_media', false);

        $this->detectMedia();

        parent::boot();
    }

    private function detectMedia()
    {
        foreach (Constant::MEDIA_TYPES as $type) {
            if (isset($this[$type])) {
                $media = $this[$type];
                $this->_setProperty('is_media', true);
                $this->_setProperty('file_id', is_array($media) ? end($media)->file_id : $media->file_id);
                $this->_setProperty('media_type', $type);

                break;
            }
        }
    }

    public function reply($text = null, ... $args): Error|PromiseInterface|Message|MessageId
    {
        $args = array_merge($args, [
            'chat_id' => $this->chat->id,
            'text' => $text ?: $this->text,
            'reply_to_message_id' => $this->message_id,
            'allow_sending_without_reply' => true,
            'caption' => $args['caption'] ?? $text,
        ]);

        return match(true) {
            isset($args['document']) => $this->telegram->sendDocument(... $args),
            isset($args['photo']) => $this->telegram->sendPhoto(... $args),
            isset($args['video']) => $this->telegram->sendVideo(... $args),
            isset($args['audio']) => $this->telegram->sendAudio(... $args),
            isset($args['voice']) => $this->telegram->sendVoice(... $args),
            isset($args['animation']) => $this->telegram->sendAnimation(... $args),
            isset($args['sticker']) => $this->telegram->sendSticker(... $args),
            isset($args['video_note']) => $this->telegram->sendVideoNote(... $args),
            default => $this->is_media ? $this->copy(... $args) : $this->telegram->sendMessage(... $args),
        }; 
    }

    public function edit($text = null, ... $args): Error|PromiseInterface|Message|bool
    {
        $fn = ! is_null($text) ? 'editMessageText' : (
            isset($args['caption']) ? 'editMessageCaption' : 'editMessageReplyMarkup'
        );

        if (is_null($text)) {
            foreach (Constant::MEDIA_TYPES as $type) {
                if (isset($args[$type])) {
                    $args['media'] = is_array($args[$type]) ? [... $args[$type], 'type' => $type] : [
                        ... $args,
                        'type' => $type,
                        'media' => $args[$type],
                    ];

                    unset($args[$type]);
                    
                    $fn = 'editMessageMedia';
                    break;
                }
            }
        }
        
        $callback = [
            $this->telegram,
            $fn
        ];


        return $callback(... array_merge($args, [
            'chat_id' => $this->chat?->id,
            'text' => $text,
            'message_id' => $this->message_id,
        ]));
    }

    public function copy($receptor = null, ... $args): Error|PromiseInterface|MessageId
    {
        $receptor ??= $this->chat->id;

        return $this->telegram->copyMessage(array_merge($args, [
            'from_chat_id' => $this->chat->id,
            'chat_id' => $receptor,
            'message_id' => $this->message_id,
        ]));
    }

    public function forward($receptor = null, ... $args): Error|PromiseInterface|Message
    {
        $receptor ??= $this->chat->id;

        return $this->telegram->forwardMessage(array_merge($args, [
            'from_chat_id' => $this->chat->id,
            'chat_id' => $receptor,
            'message_id' => $this->message_id,
        ]));
    }

    public function delete(): Error|PromiseInterface|bool
    {
        return $this->telegram->deleteMessage([
            'chat_id' => $this->chat->id,
            'message_id' => $this->message_id,
        ]);
    }
}
