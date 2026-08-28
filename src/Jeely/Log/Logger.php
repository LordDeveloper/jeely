<?php

namespace Jeely\Log;

/**
 * Simple logger with level filtering and pluggable writers.
 */
final class Logger implements LoggerInterface
{
    public const EMERGENCY = 'emergency';
    public const ALERT = 'alert';
    public const CRITICAL = 'critical';
    public const ERROR = 'error';
    public const WARNING = 'warning';
    public const NOTICE = 'notice';
    public const INFO = 'info';
    public const DEBUG = 'debug';

    private const LEVELS = [
        self::DEBUG => 100,
        self::INFO => 200,
        self::NOTICE => 250,
        self::WARNING => 300,
        self::ERROR => 400,
        self::CRITICAL => 500,
        self::ALERT => 550,
        self::EMERGENCY => 600,
    ];

    /** @var list<callable(string,string,array):void> */
    private array $writers = [];

    private int $minLevel;

    private string $channel;

    public function __construct(string $channel = 'jeely', string $minLevel = self::DEBUG)
    {
        $this->channel = $channel;
        $this->minLevel = self::LEVELS[strtolower($minLevel)] ?? self::LEVELS[self::DEBUG];
    }

    public static function stderr(string $channel = 'jeely', string $minLevel = self::DEBUG): self
    {
        $logger = new self($channel, $minLevel);
        $logger->addWriter(static function (string $level, string $line, array $context): void {
            fwrite(STDERR, $line);
        });

        return $logger;
    }

    public static function file(string $path, string $channel = 'jeely', string $minLevel = self::DEBUG): self
    {
        $dir = dirname($path);
        if (! is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        $logger = new self($channel, $minLevel);
        $logger->addWriter(static function (string $level, string $line, array $context) use ($path): void {
            file_put_contents($path, $line, FILE_APPEND | LOCK_EX);
        });

        return $logger;
    }

    public static function null(): NullLogger
    {
        return new NullLogger();
    }

    /**
     * @param callable(string $level, string $line, array $context):void $writer
     */
    public function addWriter(callable $writer): self
    {
        $this->writers[] = $writer;

        return $this;
    }

    public function withMinLevel(string $level): self
    {
        $clone = clone $this;
        $clone->minLevel = self::LEVELS[strtolower($level)] ?? $this->minLevel;

        return $clone;
    }

    public function emergency(string $message, array $context = []): void
    {
        $this->log(self::EMERGENCY, $message, $context);
    }

    public function alert(string $message, array $context = []): void
    {
        $this->log(self::ALERT, $message, $context);
    }

    public function critical(string $message, array $context = []): void
    {
        $this->log(self::CRITICAL, $message, $context);
    }

    public function error(string $message, array $context = []): void
    {
        $this->log(self::ERROR, $message, $context);
    }

    public function warning(string $message, array $context = []): void
    {
        $this->log(self::WARNING, $message, $context);
    }

    public function notice(string $message, array $context = []): void
    {
        $this->log(self::NOTICE, $message, $context);
    }

    public function info(string $message, array $context = []): void
    {
        $this->log(self::INFO, $message, $context);
    }

    public function debug(string $message, array $context = []): void
    {
        $this->log(self::DEBUG, $message, $context);
    }

    public function log(string $level, string $message, array $context = []): void
    {
        $level = strtolower($level);
        $rank = self::LEVELS[$level] ?? self::LEVELS[self::DEBUG];

        if ($rank < $this->minLevel) {
            return;
        }

        $line = sprintf(
            "[%s] %s.%s: %s%s\n",
            date('Y-m-d H:i:s'),
            $this->channel,
            strtoupper($level),
            $this->interpolate($message, $context),
            $context === [] ? '' : ' ' . $this->encodeContext($context)
        );

        foreach ($this->writers as $writer) {
            $writer($level, $line, $context);
        }
    }

    private function interpolate(string $message, array $context): string
    {
        $replace = [];
        foreach ($context as $key => $value) {
            if (is_scalar($value) || $value === null) {
                $replace['{' . $key . '}'] = (string) $value;
            }
        }

        return strtr($message, $replace);
    }

    private function encodeContext(array $context): string
    {
        $json = json_encode($context, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        return $json === false ? '' : $json;
    }
}
