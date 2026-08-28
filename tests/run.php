<?php

declare(strict_types=1);

set_error_handler(function ($severity, $message, $file, $line): bool {
    // Convert PHP warnings/notices into exceptions for consistent failures.
    throw new ErrorException($message, 0, $severity, $file, $line);
});

$testFiles = [
    __DIR__ . '/JsonMapper/JsonMapperCastTest.php',
    __DIR__ . '/JsonMapper/NectarTelegramPropagationTest.php',
    __DIR__ . '/JsonMapper/TLTypesIntegrationTest.php',
    __DIR__ . '/Mixins/MixinsTest.php',
    __DIR__ . '/Tools/ButtonTelegramTest.php',
    __DIR__ . '/Updater/UpdaterPollingPromiseAwareTest.php',
    __DIR__ . '/Support/LoggerServerTest.php',
    __DIR__ . '/Database/OrmTest.php',
    __DIR__ . '/Cache/CacheTest.php',
    __DIR__ . '/Steps/StepManagerTest.php',
];

$allTests = [];

foreach ($testFiles as $file) {
    $tests = require $file;
    foreach ($tests as $name => $callable) {
        $allTests[$name] = $callable;
    }
}

$passed = 0;
$failed = 0;

foreach ($allTests as $name => $callable) {
    try {
        $callable();
        $passed++;
        echo '[PASS] ' . $name . PHP_EOL;
    } catch (Throwable $e) {
        $failed++;
        echo '[FAIL] ' . $name . PHP_EOL;
        echo '        ' . $e::class . ': ' . $e->getMessage() . PHP_EOL;
    }
}

echo PHP_EOL . 'Done. Passed=' . $passed . ' Failed=' . $failed . PHP_EOL;

if ($failed > 0) {
    exit(1);
}

