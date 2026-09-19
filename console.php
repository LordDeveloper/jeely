<?php

declare(strict_types=1);

if (isset($argv[1]) && ! in_array($argv[1], ['--bot', '-b'], true)) {
    require __DIR__ . '/examples/consolebot/cli.php';
    exit;
}

require __DIR__ . '/examples/consolebot/run.php';
