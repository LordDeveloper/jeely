<?php

namespace Jeely\Logger;

use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class Logger extends AbstractLogger implements LoggerInterface
{
    /**
     * ANSI color codes for terminal use
     */
    private const COLORS = [
        'black' => "\033[0;30m",
        'red' => "\033[0;31m",
        'green' => "\033[0;32m",
        'yellow' => "\033[0;33m",
        'blue' => "\033[0;34m",
        'magenta' => "\033[0;35m",
        'cyan' => "\033[0;36m",
        'white' => "\033[0;37m",
        'reset' => "\033[0m",
        // کمرنگ‌تر (dim) نسخه‌های رنگها
        'dim_black' => "\033[2;30m",
        'dim_red' => "\033[2;31m",
        'dim_green' => "\033[2;32m",
        'dim_yellow' => "\033[2;33m",
        'dim_blue' => "\033[2;34m",
        'dim_magenta' => "\033[2;35m",
        'dim_cyan' => "\033[2;36m",
        'dim_white' => "\033[2;37m",
    ];

    /**
     * Mapping log levels to colors
     */
    private const LEVEL_COLORS = [
        LogLevel::EMERGENCY => 'red',
        LogLevel::ALERT => 'red',
        LogLevel::CRITICAL => 'red',
        LogLevel::ERROR => 'red',
        LogLevel::WARNING => 'yellow',
        LogLevel::NOTICE => 'cyan',
        LogLevel::INFO => 'green',
        LogLevel::DEBUG => 'white',
    ];

    /**
     * Log level priorities (lower number means higher priority)
     */
    private const LEVEL_PRIORITIES = [
        LogLevel::EMERGENCY => 0,
        LogLevel::ALERT => 1,
        LogLevel::CRITICAL => 2,
        LogLevel::ERROR => 3,
        LogLevel::WARNING => 4,
        LogLevel::NOTICE => 5,
        LogLevel::INFO => 6,
        LogLevel::DEBUG => 7,
    ];

    /**
     * Log file path
     */
    private ?string $logFilePath;

    /**
     * Whether to display logs in console
     */
    private bool $displayInConsole;

    /**
     * Whether colors are enabled
     */
    private bool $colorEnabled;
    
    /**
     * Current log level threshold
     */
    private string $logLevel;

    /**
     * Constructor
     *
     * @param string|null $logFilePath Log file path (if null, logs won't be saved to file)
     * @param bool $displayInConsole Whether to display logs in console
     * @param bool $colorEnabled Whether to enable colors
     * @param string $logLevel Minimum log level to display (e.g., LogLevel::ERROR)
     */
    public function __construct(?string $logFilePath = null, bool $displayInConsole = true, bool $colorEnabled = true, string $logLevel = LogLevel::DEBUG)
    {
        $this->logFilePath = $logFilePath; // Only save to file if explicitly provided
        $this->displayInConsole = $displayInConsole;
        $this->colorEnabled = $colorEnabled && $this->isSupportColor();
        $this->logLevel = $logLevel;
    }

    /**
     * Check if the environment supports color output
     */
    private function isSupportColor(): bool
    {
        if (DIRECTORY_SEPARATOR === '\\') {
            // Check for Windows terminals with ANSI support
            return (false !== getenv('ANSICON')) 
                || ('ON' === getenv('ConEmuANSI')) 
                || ('xterm' === getenv('TERM'))
                || (false !== getenv('WT_SESSION'));
        }

        return stream_isatty(STDOUT);
    }

    /**
     * Format text with specified color
     */
    private function colorize(string $text, string $color, bool $dim = false): string
    {
        if (!$this->colorEnabled) {
            return $text;
        }

        $finalColor = $color;
        if ($dim) {
            $finalColor = 'dim_' . $color;
        }

        $colorCode = self::COLORS[$finalColor] ?? self::COLORS['reset'];
        return $colorCode . $text . self::COLORS['reset'];
    }
    
    /**
     * Set the minimum log level threshold
     */
    public function setLogLevel(string $level): void
    {
        if (!isset(self::LEVEL_PRIORITIES[$level])) {
            throw new \InvalidArgumentException('Invalid log level: ' . $level);
        }
        
        $this->logLevel = $level;
    }
    
    /**
     * Check if the given log level should be logged based on current threshold
     */
    private function shouldLog(string $level): bool
    {
        return self::LEVEL_PRIORITIES[$level] <= self::LEVEL_PRIORITIES[$this->logLevel];
    }

    /**
     * Log with specified level
     *
     * @param mixed $level Log level
     * @param string|\Stringable $message Message
     * @param array $context Additional context data
     */
    public function log($level, string|\Stringable $message, array $context = []): void
    {
        // Check if this log level should be processed based on current threshold
        if (!$this->shouldLog($level)) {
            return;
        }
        
        $color = self::LEVEL_COLORS[$level] ?? 'white';
        
        // Format message using context
        $message = $this->interpolate((string)$message, $context);
        
        // Create final log message
        $dateTime = new \DateTime();
        $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
        $logMessage = "[$formattedDateTime] [$level] $message";
        
        // Display in console
        if ($this->displayInConsole) {
            $levelLabel = $this->colorize(strtoupper($level), $color);
            $colorizedMessage = $this->colorize($message, $color, true);
            $coloredMessage = "[$formattedDateTime] [$levelLabel] $colorizedMessage";
            echo $coloredMessage . PHP_EOL;
        }
        
        // Save to file only if path is explicitly provided
        if ($this->logFilePath !== null) {
            file_exists($this->logFilePath) || 
            (is_dir($dir = dirname($this->logFilePath)) || mkdir($dir, recursive: true)) &&
            touch($this->logFilePath);
            
            file_put_contents(
                $this->logFilePath,
                $logMessage . PHP_EOL,
                FILE_APPEND
            );
        }
    }

    /**
     * Replace parameters in message
     */
    private function interpolate(string $message, array $context = []): string
    {
        $replaces = [];
        
        foreach ($context as $key => $val) {
            if (is_null($val) || is_scalar($val) || (is_object($val) && method_exists($val, '__toString'))) {
                $replaces['{' . $key . '}'] = $val;
            } elseif (is_object($val)) {
                $replaces['{' . $key . '}'] = '[object ' . get_class($val) . ']';
            } elseif (is_array($val)) {
                $replaces['{' . $key . '}'] = json_encode($val);
            } else {
                $replaces['{' . $key . '}'] = '[' . gettype($val) . ']';
            }
        }
        
        return strtr($message, $replaces);
    }
} 