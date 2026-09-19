<?php

declare(strict_types=1);

require dirname(__DIR__, 2) . '/vendor/autoload.php';

['bot' => $bot] = require __DIR__ . '/bootstrap.php';

exit($bot->console()->run($argv));
