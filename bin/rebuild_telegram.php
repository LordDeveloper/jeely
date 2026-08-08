<?php

/**
 * Rebuilds src/Jeely/Telegram.php with schema annotations + clean implementation.
 */

declare(strict_types=1);

$root = dirname(__DIR__);
$schema = json_decode(file_get_contents($root . '/schema.json'), true);
$path = $root . '/src/Jeely/Telegram.php';

$primitives = [
    'int' => 'int',
    'integer' => 'int',
    'float' => 'float',
    'double' => 'float',
    'bool' => 'bool',
    'boolean' => 'bool',
    'true' => 'bool',
    'false' => 'bool',
    'string' => 'string',
    'object' => 'object',
    'array' => 'array',
    'null' => 'null',
];

function normalizeType(string $type, array $primitives): string
{
    $type = trim($type);
    while (preg_match('/^Array<(.+)>$/', $type, $m)) {
        return normalizeType($m[1], $primitives) . '[]';
    }
    $lower = strtolower($type);
    return $primitives[$lower] ?? $type;
}

function phpDocUnion(array $types, array $primitives): string
{
    $parts = [];
    foreach ($types as $t) {
        $n = normalizeType($t, $primitives);
        if (! in_array($n, $parts, true)) {
            $parts[] = $n;
        }
    }
    return implode('|', $parts);
}

function phpDocEscape(string $text): string
{
    $text = preg_replace('/\s+/', ' ', str_replace(["\r\n", "\r"], "\n", $text)) ?? $text;
    return trim(str_replace(['*/', '@'], ['* /', '＠'], $text));
}

$docLines = [
    '/**',
    ' * @class Telegram',
    ' *',
];

foreach ($schema['methods'] as $method) {
    $name = $method['name'];
    $desc = phpDocEscape($method['description'] ?? '');
    $returns = phpDocUnion($method['return_types'] ?? ['mixed'], $primitives);
    $docLines[] = " * @method {$returns} {$name}(...\$params) {$desc}";
}

$docLines[] = ' */';
$doc = implode("\n", $docLines);

$impl = <<<'PHP'
<?php

namespace Jeely;

use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Utils;
use Jeely\Api\Methods\MethodDefinitionInterface;
use Jeely\Api\Types\Error;
use Jeely\Api\Types\ForceReply;
use Jeely\Api\Types\InlineKeyboardButton;
use Jeely\Api\Types\InlineKeyboardMarkup;
use Jeely\Api\Types\KeyboardButton;
use Jeely\Api\Types\KeyboardButtonInterface;
use Jeely\Api\Types\ReplyKeyboardMarkup;
use Jeely\Api\Types\ReplyKeyboardRemove;
use Jeely\Tools\Constant;
use Jeely\Tools\Utils as ValueUtils;
use Psr\Http\Message\ResponseInterface;
use Throwable;

DOC
class Telegram
{
    private Browser $browser;

    private string $baseUri = 'https://api.telegram.org/';

    protected ?string $parseMode = null;

    protected ?string $signature = null;

    /** @var string[] */
    private array $uploadableFields = Constant::MEDIA_TYPES;

    public function __construct(protected string $token, array $browserConfig = [])
    {
        $this->browser = Browser::factory([
            'base_uri' => $this->baseUri,
        ])->withConfig($browserConfig);
    }

    public static function factory(string $token, array $browserConfig = []): self
    {
        return new self($token, $browserConfig);
    }

    public function setParseMode(?string $parseMode): self
    {
        $this->parseMode = $parseMode;

        return $this;
    }

    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    public function setBaseUri(string $baseUri): self
    {
        $this->baseUri = rtrim($baseUri, '/') . '/';
        $this->browser = $this->browser->withConfig([
            'base_uri' => $this->baseUri,
        ]);

        return $this;
    }

    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    public function getBrowser(): Browser
    {
        return $this->browser;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function fetchAsync(string $uri, array $fields = []): PromiseInterface
    {
        $fields = $this->prepareFields($fields);
        $multipart = $this->buildMultipart($fields);

        return $this->browser->requestAsync(
            'POST',
            sprintf('/bot%s/%s', $this->getToken(), ltrim($uri, '/')),
            ['multipart' => $multipart]
        )->then(
            function (ResponseInterface $response) {
                $payload = json_decode($response->getBody()->getContents(), true);

                if (! is_array($payload)) {
                    return new Error([
                        'ok' => false,
                        'error_code' => $response->getStatusCode(),
                        'description' => 'Invalid JSON response from Telegram API',
                    ]);
                }

                if (! empty($payload['ok'])) {
                    return $payload['result'];
                }

                return new Error($payload);
            },
            function (Throwable $exception) {
                return new Error([
                    'ok' => false,
                    'error_code' => $exception->getCode(),
                    'description' => $exception->getMessage(),
                ]);
            }
        );
    }

    public function __call(string $name, array $arguments = []): mixed
    {
        $class = '\\Jeely\\Api\\Methods\\' . str_replace('_', '', ucwords($name, '_'));

        if (! class_exists($class)) {
            throw new \BadMethodCallException(sprintf('Telegram method [%s] is not defined.', $name));
        }

        if (isset($arguments[0]) && is_array($arguments[0])) {
            $arguments = array_merge(array_shift($arguments), $arguments);
        }

        return $this(new $class($arguments));
    }

    public function __invoke(MethodDefinitionInterface $method): mixed
    {
        return $method($this);
    }

    private function prepareFields(array $fields): array
    {
        if (! array_key_exists('parse_mode', $fields)) {
            $fields['parse_mode'] = $this->parseMode;
        }

        if (isset($fields['buttons']) && ! isset($fields['reply_markup'])) {
            $fields['reply_markup'] = $fields['buttons'];
            unset($fields['buttons']);
        }

        $files = [];
        $keyboardMeta = [
            'is_inline' => null,
            'resize_keyboard' => false,
            'one_time_keyboard' => false,
            'selective' => false,
            'is_persistent' => false,
        ];

        array_walk_recursive($fields, function (&$value, $attribute) use (&$files, &$keyboardMeta, $fields) {
            if ($value instanceof KeyboardButtonInterface) {
                $this->collectKeyboardMeta($value, $keyboardMeta);
            }

            if ($value instanceof Nectar) {
                $value->withTelegram($this);
            }

            if (
                is_string($value)
                && @is_file($value)
                && @filesize($value) > 0
                && in_array(strtolower((string) $attribute), $this->uploadableFields, true)
            ) {
                $name = basename($value);
                $files[$name] = $value;
                $value = 'attach://' . $name;
            }

            if (! empty($this->signature) && ! isset($fields['sign'])) {
                if (in_array((string) $attribute, ['text', 'caption', 'message_text'], true)) {
                    $value .= "\n" . $this->formatSignature((string) ($fields['parse_mode'] ?? ''));
                }
            }
        });

        foreach (['chat_id', 'user_id'] as $recipient) {
            if (isset($fields[$recipient]) && is_string($fields[$recipient]) && strtolower($fields[$recipient]) === 'me') {
                $fields[$recipient] = $this->botId();
            }
        }

        if (isset($fields['reply_markup'])) {
            $fields['reply_markup'] = $this->normalizeReplyMarkup($fields['reply_markup'], $keyboardMeta);
        }

        if (array_key_exists('parse_mode', $fields) && $fields['parse_mode'] === null) {
            unset($fields['parse_mode']);
        }

        $fields['__files'] = $files;

        return $fields;
    }

    private function buildMultipart(array $fields): array
    {
        $files = $fields['__files'] ?? [];
        unset($fields['__files']);

        $multipart = [];

        foreach ($files as $fileName => $path) {
            $multipart[] = [
                'name' => $fileName,
                'contents' => Utils::tryFopen($path, 'r'),
                'filename' => $fileName,
            ];
        }

        foreach ($fields as $fieldName => $content) {
            if ($content === null) {
                continue;
            }

            $multipart[] = [
                'name' => $fieldName,
                'contents' => $this->encodeField($content),
            ];
        }

        if ($multipart === []) {
            $multipart[] = [
                'name' => '_',
                'contents' => '1',
            ];
        }

        return $multipart;
    }

    private function encodeField(mixed $contents): string
    {
        if ($contents instanceof Nectar) {
            $contents = $contents->toArray();
        }

        if (is_array($contents)) {
            $contents = $this->normalizeArrayTree($contents);

            return json_encode($contents, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }

        if (is_bool($contents)) {
            return $contents ? '1' : '0';
        }

        if (ValueUtils::isStringable($contents)) {
            return (string) $contents;
        }

        return (string) $contents;
    }

    private function normalizeArrayTree(array $items): array
    {
        foreach ($items as $key => $value) {
            if ($value instanceof Nectar) {
                $items[$key] = $value->toArray();
            } elseif (is_array($value)) {
                $items[$key] = $this->normalizeArrayTree($value);
            } elseif (ValueUtils::isStringable($value)) {
                $asString = (string) $value;
                $items[$key] = ValueUtils::isJson($asString) ? json_decode($asString) : $value;
            }
        }

        return $items;
    }

    private function collectKeyboardMeta(KeyboardButtonInterface $button, array &$meta): void
    {
        if ($meta['is_inline'] === null) {
            $meta['is_inline'] = $button instanceof InlineKeyboardButton;
        }

        if (! empty($button['resize']) || ! empty($button['resize_keyboard'])) {
            $meta['resize_keyboard'] = true;
        }
        if (! empty($button['one_time']) || ! empty($button['one_time_keyboard'])) {
            $meta['one_time_keyboard'] = true;
        }
        if (! empty($button['selective'])) {
            $meta['selective'] = true;
        }
        if (! empty($button['is_persistent'])) {
            $meta['is_persistent'] = true;
        }
    }

    private function normalizeReplyMarkup(mixed $replyMarkup, array $keyboardMeta): mixed
    {
        if (
            $replyMarkup instanceof InlineKeyboardMarkup
            || $replyMarkup instanceof ReplyKeyboardMarkup
            || $replyMarkup instanceof ReplyKeyboardRemove
            || $replyMarkup instanceof ForceReply
        ) {
            return $replyMarkup;
        }

        if ($replyMarkup instanceof KeyboardButtonInterface) {
            $replyMarkup = [[$replyMarkup]];
        } elseif (
            is_array($replyMarkup)
            && isset($replyMarkup[0])
            && $replyMarkup[0] instanceof KeyboardButtonInterface
        ) {
            $replyMarkup = [$replyMarkup];
        }

        if (! is_array($replyMarkup)) {
            return $replyMarkup;
        }

        if (isset($replyMarkup['inline_keyboard']) || isset($replyMarkup['keyboard'])) {
            return $replyMarkup;
        }

        $isInline = $keyboardMeta['is_inline'];
        if ($isInline === null) {
            $isInline = $this->detectInlineKeyboard($replyMarkup);
        }

        if ($isInline) {
            return ['inline_keyboard' => $replyMarkup];
        }

        return [
            'keyboard' => $replyMarkup,
            'resize_keyboard' => $keyboardMeta['resize_keyboard'] ?: true,
            'one_time_keyboard' => $keyboardMeta['one_time_keyboard'],
            'selective' => $keyboardMeta['selective'],
            'is_persistent' => $keyboardMeta['is_persistent'],
        ];
    }

    private function detectInlineKeyboard(array $rows): bool
    {
        foreach ($rows as $row) {
            if (! is_array($row)) {
                continue;
            }

            foreach ($row as $button) {
                if ($button instanceof InlineKeyboardButton) {
                    return true;
                }
                if ($button instanceof KeyboardButton) {
                    return false;
                }
            }
        }

        return false;
    }

    private function formatSignature(string $parseMode): string
    {
        return match (strtolower($parseMode)) {
            'markdown', 'markdownv2' => \escape_markdown((string) $this->signature),
            'html' => htmlspecialchars((string) $this->signature, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'),
            default => (string) $this->signature,
        };
    }

    private function botId(): int
    {
        return (int) explode(':', $this->token, 2)[0];
    }
}

PHP;

file_put_contents($path, str_replace('DOC', $doc, $impl));
echo "Rebuilt Telegram.php\n";
