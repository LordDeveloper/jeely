<?php

/**
 * Generates Jeely TL Types and Methods from schema.json
 *
 * Usage: php bin/generate_tl.php
 */

declare(strict_types=1);

$root = dirname(__DIR__);
$schemaPath = $root . '/schema.json';
$typesDir = $root . '/src/Jeely/Api/Types';
$methodsDir = $root . '/src/Jeely/Api/Methods';
$updatePath = $root . '/src/Jeely/Api/Update.php';
$telegramPath = $root . '/src/Jeely/Telegram.php';

$schema = json_decode(file_get_contents($schemaPath), true);
if (! is_array($schema)) {
    fwrite(STDERR, "Invalid schema.json\n");
    exit(1);
}

@mkdir($typesDir, 0777, true);
@mkdir($methodsDir, 0777, true);

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

function snakeToStudly(string $name): string
{
    return str_replace(' ', '', ucwords(str_replace('_', ' ', $name)));
}

function phpDocEscape(string $text): string
{
    $text = str_replace(["\r\n", "\r"], "\n", $text);
    $text = preg_replace('/\s+/', ' ', $text) ?? $text;
    return trim(str_replace(['*/', '@'], ['* /', '＠'], $text));
}

/**
 * Convert schema type string like Array<Message> or Array<Array<InlineKeyboardButton>>
 * into project map type: Message[] / InlineKeyboardButton[][]
 */
function normalizeSchemaType(string $type, array $primitives): string
{
    $type = trim($type);

    // Array<...> nested
    while (preg_match('/^Array<(.+)>$/', $type, $m)) {
        $inner = normalizeSchemaType($m[1], $primitives);
        // if already ends with [], just add another []
        return $inner . '[]';
    }

    $lower = strtolower($type);
    if (isset($primitives[$lower])) {
        return $primitives[$lower];
    }

    // InputFile or class names stay as-is
    return $type;
}

/**
 * Pick a JSON_PROPERTY_MAP type from a list of schema types.
 * Prefer first non-primitive object type; for unions of primitives pick first.
 */
function mapTypeForProperty(array $types, array $primitives): string
{
    $normalized = array_map(fn ($t) => normalizeSchemaType($t, $primitives), $types);

    foreach ($normalized as $t) {
        $base = rtrim($t, '[]');
        if (! isset($primitives[strtolower($base)]) && ! in_array(strtolower($base), ['true', 'false'], true)) {
            return $t;
        }
    }

    return $normalized[0] ?? 'mixed';
}

function phpDocUnion(array $types, array $primitives): string
{
    $parts = [];
    foreach ($types as $t) {
        $n = normalizeSchemaType($t, $primitives);
        if (! in_array($n, $parts, true)) {
            $parts[] = $n;
        }
    }
    return implode('|', $parts);
}

function castsToFromReturnTypes(array $returnTypes, array $primitives): string
{
    // Prefer first object/array-of-object; else first primitive
    foreach ($returnTypes as $rt) {
        $n = normalizeSchemaType($rt, $primitives);
        $base = rtrim($n, '[]');
        if (! isset($primitives[strtolower($base)])) {
            return $n;
        }
    }

    $first = normalizeSchemaType($returnTypes[0] ?? 'string', $primitives);
    // MethodDefinition expects bool/int/string etc without []
    return $first;
}

function writeFile(string $path, string $contents): void
{
    if (file_exists($path) && file_get_contents($path) === $contents) {
        return;
    }
    file_put_contents($path, $contents);
}

function renderTypeClass(
    string $className,
    string $description,
    array $fields,
    array $primitives,
    string $namespace = 'Jeely\\Api\\Types',
    string $extends = '\\Jeely\\Nectar',
    bool $useTypesPrefixInMap = false
): string {
    $doc = [];
    $doc[] = '/**';
    $doc[] = " * @class {$className}";
    $doc[] = ' * @description ' . phpDocEscape($description);
    $doc[] = ' *';

    foreach ($fields as $field) {
        $union = phpDocUnion($field['types'], $primitives);
        $desc = phpDocEscape($field['description'] ?? '');
        $studly = snakeToStudly($field['name']);
        $doc[] = " * @method {$union} get{$studly}() {$desc}";
    }

    if ($fields) {
        $doc[] = ' *';
        foreach ($fields as $field) {
            $studly = snakeToStudly($field['name']);
            $doc[] = " * @method bool is{$studly}()";
        }
        $doc[] = ' *';
        foreach ($fields as $field) {
            $studly = snakeToStudly($field['name']);
            $doc[] = " * @method \$this set{$studly}()";
        }
        $doc[] = ' *';
        foreach ($fields as $field) {
            $studly = snakeToStudly($field['name']);
            $doc[] = " * @method \$this unset{$studly}()";
        }
        $doc[] = ' *';
        foreach ($fields as $field) {
            $union = phpDocUnion($field['types'], $primitives);
            $desc = phpDocEscape($field['description'] ?? '');
            $doc[] = " * @property {$union} \${$field['name']} {$desc}";
        }
    }

    $anchor = strtolower($className);
    $doc[] = ' *';
    $doc[] = " * @see https://core.telegram.org/bots/api#{$anchor}";
    $doc[] = ' */';

    $mapLines = [];
    foreach ($fields as $field) {
        $mapType = mapTypeForProperty($field['types'], $primitives);
        // For Update in Jeely\Api namespace, nested objects use Types\X
        if ($useTypesPrefixInMap) {
            $base = rtrim($mapType, '[]');
            $depth = substr_count($mapType, '[]');
            $isPrimitive = isset($primitives[strtolower($base)]);
            if (! $isPrimitive) {
                $mapType = 'Types\\' . $base . str_repeat('[]', $depth);
            }
        }
        $mapLines[] = "        '{$field['name']}' => '{$mapType}',";
    }

    $mapBody = $mapLines ? ("\n" . implode("\n", $mapLines) . "\n    ") : '';

    $code = "<?php\n\n";
    $code .= "namespace {$namespace};\n\n";
    $code .= implode("\n", $doc) . "\n";
    $code .= "class {$className} extends {$extends}\n";
    $code .= "{\n";
    $code .= "    public const JSON_PROPERTY_MAP = [{$mapBody}];\n";
    $code .= "}\n";

    return $code;
}

function renderMethodClass(array $method, array $primitives): string
{
    $name = $method['name'];
    $className = ucfirst($name);
    $description = phpDocEscape($method['description'] ?? '');
    $fields = $method['fields'] ?? [];
    $returnTypes = $method['return_types'] ?? ['string'];
    $castsTo = castsToFromReturnTypes($returnTypes, $primitives);
    $returnDoc = phpDocUnion($returnTypes, $primitives);

    // For return docs, Update lives in Jeely\Api\Update but cast path uses Types\Update alias
    $invokeReturn = $returnDoc;

    $doc = [];
    $doc[] = '/**';
    $doc[] = " * @class {$className}";
    $doc[] = " * @description {$description}";
    $doc[] = ' *';

    foreach ($fields as $field) {
        $union = phpDocUnion($field['types'], $primitives);
        $desc = phpDocEscape($field['description'] ?? '');
        $doc[] = " * @property {$union} \${$field['name']} {$desc}";
    }

    $doc[] = ' *';
    $doc[] = " * @see https://core.telegram.org/bots/api#" . strtolower($name);
    $doc[] = ' */';

    $code = "<?php\n\n";
    $code .= "namespace Jeely\\Api\\Methods;\n\n";
    $code .= "use Jeely\\Telegram;\n\n";
    $code .= implode("\n", $doc) . "\n";
    $code .= "class {$className} extends MethodDefinition implements MethodDefinitionInterface\n";
    $code .= "{\n";
    $code .= "    protected string \$castsTo = '{$castsTo}';\n\n";
    $code .= "    public function __construct(...\$params)\n";
    $code .= "    {\n";
    $code .= "        \$this->params = \$params;\n";
    $code .= "    }\n\n";
    $code .= "    /**\n";
    $code .= "     * @return {$invokeReturn}\n";
    $code .= "     */\n";
    $code .= "    public function __invoke(Telegram \$telegram)\n";
    $code .= "    {\n";
    $code .= "        return \$this->call(\$telegram);\n";
    $code .= "    }\n";
    $code .= "}\n";

    return $code;
}

function renderTelegramPhpDoc(array $methods, array $primitives): string
{
    $lines = [];
    $lines[] = '/**';
    $lines[] = ' * @class Telegram';
    $lines[] = ' *';

    foreach ($methods as $method) {
        $name = $method['name'];
        $desc = phpDocEscape($method['description'] ?? '');
        $returns = phpDocUnion($method['return_types'] ?? ['mixed'], $primitives);
        // Prefer Types namespace for object returns in docs
        $returns = preg_replace('/\bArray</', '', $returns) ?? $returns;
        $lines[] = " * @method {$returns} {$name}(...\$params) {$desc}";
    }

    $lines[] = ' */';
    return implode("\n", $lines);
}

echo "Generating from Bot API {$schema['version']}...\n";

// --- Types ---
$generatedTypeNames = [];
foreach ($schema['types'] as $type) {
    $className = $type['name'];
    $generatedTypeNames[] = $className;

    if ($className === 'Update') {
        // Canonical Update lives in Jeely\Api
        $contents = renderTypeClass(
            'Update',
            $type['description'] ?? '',
            $type['fields'] ?? [],
            $primitives,
            'Jeely\\Api',
            '\\Jeely\\Nectar',
            true
        );
        writeFile($updatePath, $contents);

        // Compatibility alias in Types namespace
        $alias = "<?php\n\nnamespace Jeely\\Api\\Types;\n\nclass Update extends \\Jeely\\Api\\Update\n{\n}\n";
        writeFile($typesDir . '/Update.php', $alias);
        continue;
    }

    $contents = renderTypeClass(
        $className,
        $type['description'] ?? '',
        $type['fields'] ?? [],
        $primitives
    );
    writeFile($typesDir . '/' . $className . '.php', $contents);
}

// Keep Error as a special response type if missing from schema
if (! in_array('Error', $generatedTypeNames, true)) {
    $error = <<<'PHP'
<?php

namespace Jeely\Api\Types;

use Jeely\Nectar;

/**
 * @class Error
 * @description In case of an unsuccessful request, 'ok' equals false and the error is explained in the 'description'.
 *
 * @method bool getOk()
 * @method string getDescription()
 * @method int getErrorCode()
 * @method ResponseParameters getParameters()
 *
 * @property bool $ok
 * @property string $description
 * @property int $error_code
 * @property ResponseParameters $parameters
 */
class Error extends Nectar
{
    public const JSON_PROPERTY_MAP = [
        'ok' => 'bool',
        'description' => 'string',
        'error_code' => 'int',
        'parameters' => 'ResponseParameters',
    ];
}

PHP;
    writeFile($typesDir . '/Error.php', $error);
}

// Preserve keyboard interfaces used by Telegram client
$keyboardInterface = <<<'PHP'
<?php

namespace Jeely\Api\Types;

interface KeyboardButtonInterface
{
}

PHP;
writeFile($typesDir . '/KeyboardButtonInterface.php', $keyboardInterface);

// Make button classes implement interface if they exist after generation
foreach (['KeyboardButton', 'InlineKeyboardButton'] as $btn) {
    $path = $typesDir . '/' . $btn . '.php';
    if (! file_exists($path)) {
        continue;
    }
    $src = file_get_contents($path);
    if (! str_contains($src, 'KeyboardButtonInterface')) {
        $src = str_replace(
            "class {$btn} extends \\Jeely\\Nectar",
            "class {$btn} extends \\Jeely\\Nectar implements KeyboardButtonInterface",
            $src
        );
        file_put_contents($path, $src);
    }
}

// --- Methods ---
$keepMethodFiles = [
    'MethodDefinition.php',
    'MethodDefinitionInterface.php',
];

foreach ($schema['methods'] as $method) {
    $className = ucfirst($method['name']);
    $contents = renderMethodClass($method, $primitives);
    writeFile($methodsDir . '/' . $className . '.php', $contents);
}

// Remove obsolete generated method classes not in schema (except core)
$schemaMethodFiles = array_map(fn ($m) => ucfirst($m['name']) . '.php', $schema['methods']);
foreach (glob($methodsDir . '/*.php') as $file) {
    $base = basename($file);
    if (in_array($base, $keepMethodFiles, true)) {
        continue;
    }
    if (! in_array($base, $schemaMethodFiles, true)) {
        unlink($file);
        echo "Removed obsolete method: {$base}\n";
    }
}

// Remove obsolete type files not in schema (except specials)
$specialTypes = ['Error.php', 'KeyboardButtonInterface.php', 'Update.php'];
$schemaTypeFiles = array_map(fn ($t) => $t['name'] . '.php', $schema['types']);
foreach (glob($typesDir . '/*.php') as $file) {
    $base = basename($file);
    if (in_array($base, $specialTypes, true)) {
        continue;
    }
    if (! in_array($base, $schemaTypeFiles, true)) {
        unlink($file);
        echo "Removed obsolete type: {$base}\n";
    }
}

// --- Patch Telegram.php method annotations ---
if (file_exists($telegramPath)) {
    $telegramSrc = file_get_contents($telegramPath);
    $newDoc = renderTelegramPhpDoc($schema['methods'], $primitives);

    if (preg_match('/\/\*\*.*?@class Telegram.*?\*\/\s*class Telegram/s', $telegramSrc)) {
        $telegramSrc = preg_replace(
            '/\/\*\*.*?@class Telegram.*?\*\/\s*(class Telegram)/s',
            $newDoc . "\n$1",
            $telegramSrc,
            1
        );
        file_put_contents($telegramPath, $telegramSrc);
        echo "Updated Telegram.php method annotations\n";
    } else {
        echo "WARNING: could not locate Telegram phpdoc block\n";
    }
}

// Re-attach ergonomic mixins on selected types
$traitMap = [
    'Message' => 'Jeely\\Mixins\\InteractsWithMessage',
    'CallbackQuery' => 'Jeely\\Mixins\\InteractsWithCallbackQuery',
    'InlineQuery' => 'Jeely\\Mixins\\InteractsWithInlineQuery',
    'User' => 'Jeely\\Mixins\\InteractsWithUser',
    'Chat' => 'Jeely\\Mixins\\InteractsWithChat',
    'ShippingQuery' => 'Jeely\\Mixins\\InteractsWithShippingQuery',
    'PreCheckoutQuery' => 'Jeely\\Mixins\\InteractsWithPreCheckoutQuery',
    'ChatJoinRequest' => 'Jeely\\Mixins\\InteractsWithChatJoinRequest',
    'ChatMemberUpdated' => 'Jeely\\Mixins\\InteractsWithChatMemberUpdated',
    'MessageReactionUpdated' => 'Jeely\\Mixins\\InteractsWithMessageReaction',
];

foreach ($traitMap as $typeName => $trait) {
    $path = $typesDir . '/' . $typeName . '.php';
    if (! file_exists($path)) {
        continue;
    }

    $src = file_get_contents($path);
    if (str_contains($src, $trait)) {
        continue;
    }

    $short = substr($trait, strrpos($trait, '\\') + 1);
    $src = str_replace(
        "namespace Jeely\\Api\\Types;\n\n",
        "namespace Jeely\\Api\\Types;\n\nuse {$trait};\n\n",
        $src
    );
    $src = str_replace(
        "class {$typeName} extends \\Jeely\\Nectar\n{\n",
        "class {$typeName} extends \\Jeely\\Nectar\n{\n    use {$short};\n\n",
        $src
    );
    file_put_contents($path, $src);
    echo "Attached trait {$short} to {$typeName}\n";
}

echo 'Types generated: ' . count($schema['types']) . PHP_EOL;
echo 'Methods generated: ' . count($schema['methods']) . PHP_EOL;
echo "Done.\n";
