<?php

namespace Jeely\Extra;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\Collection;
use Jeely\TLObject;
use Jeely\Telegram;
use ReflectionClass;

/**
 * Summary of MethodDefinition
 * 
 * @method static mixed perform(Telegram $telegram, array $arguments)
 * @method mixed perform(Telegram $telegram)
 */
class MethodDefinition
{
    private bool $async = false;
    protected array $arguments = [];

    protected Telegram $telegram;

    protected bool $dispatched = false;

    public function __construct(array $arguments = [])
    {
        $this->async = $arguments['async'] ?? false;
        unset($arguments['async']);
        
        $this->arguments = $arguments;
    }
    
 
    public function withTelegram(Telegram $telegram): self
    {
        $this->telegram = $telegram;

        return $this;
    }

    public function getTelegram(): Telegram
    {
        return $this->telegram;
    }

    public function __set($name, $value)
    {
        if (is_null($name)) {
            $this->arguments[] = $value;
        } else {
            $this->arguments[$name] = $value;
        }
    }

    public function dispatch()
    {
        $arguments = $this->getArguments();
        $telegram = $this->getTelegram();

        $promise = $telegram->fetchAsync($this->getName(), $arguments)
            ->then(function ($response) use ($telegram): mixed {
                $common = ['bool', 'boolean', 'int', 'integer', 'float', 'double', 'string', 'array', 'object', 'null'];
                $reflection = new ReflectionClass($this);
                if (count($casts = $reflection->getAttributes(Casts::class)) > 0) {
                    $instance = reset($casts)
                        ->newInstance();

                    if ($instance instanceof Casts) {
                        foreach ($instance->types as $type) {
                            if ($response instanceof TLObject) {
                                return $response;
                            } 

                            elseif (in_array($type, $common) && gettype($response) === $type) {
                                return $response;
                            } else {
                                $isArray = str_ends_with($type, '[]');
                                $type = rtrim($type, '[]');

                                $convert = function ($response) use ($telegram, $common, $type) {
                                    if (is_array($response) && class_exists($type)) {

                                        return $type::appends($response, compact(
                                            'telegram'
                                        ));
                                    }

                                    elseif (in_array($type, $common)) {
                                        settype($response, $type);
                                        
                                        return $response;
                                    }

                                    return false;
                                };

                                if (false !== $result = $isArray ? new Collection(array_map($convert, $response)) : $convert($response)) {
                                    return $result;
                                }
                            }
                        }

                        return false;
                    }
                }

                return false;                
            });
        
        $this->dispatched = true;

        return $this->async ? $promise : $promise->wait();
    }

    private function getName(): string
    {
        return lcfirst(basename(str_replace('\\', '/', get_class($this))));
    }

    private function getArguments(): array
    {
        if (isset($this->arguments[0])) {
            $this->arguments = array_merge(
                array_shift($this->arguments), $this->arguments
            );
        }

        return $this->arguments;
    }  

    public function __call($name, $arguments)
    {
        if (strtolower($name) === 'perform') {
            $telegram = array_shift($arguments);

            return $this->withTelegram($telegram)
                ->dispatch();
        }

        trigger_error('Method ' . $name . ' is not defined', E_USER_ERROR);
    }

    public static function __callStatic($name, $arguments)
    {
        if (strtolower($name) === 'perform') {
            [$telegram, $arguments] = array_pad($arguments, 2, value: []);

            return (new static((array) $arguments))
                ->withTelegram($telegram)
                ->dispatch();
        }

        trigger_error('Method ' . $name . ' is not defined', E_USER_ERROR);
    }
}