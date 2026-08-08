<?php

$s = json_decode(file_get_contents(__DIR__ . '/../schema.json'), true);

foreach (['getUpdates', 'sendMessage', 'getMe', 'editMessageText', 'answerCallbackQuery'] as $name) {
    foreach ($s['methods'] as $m) {
        if ($m['name'] === $name) {
            echo "=== {$name} ===\n";
            echo 'return_types=' . json_encode($m['return_types']) . PHP_EOL;
            if (!empty($m['fields'][0])) {
                echo 'field0=' . json_encode($m['fields'][0], JSON_UNESCAPED_UNICODE) . PHP_EOL;
            }
            break;
        }
    }
}

foreach (['Update', 'Message', 'ChatMember', 'InlineKeyboardMarkup', 'InputFile'] as $name) {
    foreach ($s['types'] as $t) {
        if ($t['name'] === $name) {
            echo "=== TYPE {$name} ===\n";
            echo 'keys=' . implode(',', array_keys($t)) . PHP_EOL;
            echo 'extended_by=' . json_encode($t['extended_by'] ?? null) . PHP_EOL;
            echo 'href=' . ($t['href'] ?? '') . PHP_EOL;
            echo 'fields=' . count($t['fields'] ?? []) . PHP_EOL;
            if (!empty($t['fields'][0])) {
                echo 'field0=' . json_encode($t['fields'][0], JSON_UNESCAPED_UNICODE) . PHP_EOL;
            }
            if (!empty($t['fields'][1])) {
                echo 'field1 types=' . json_encode($t['fields'][1]['types']) . PHP_EOL;
            }
            break;
        }
    }
}

// array type examples
foreach ($s['types'] as $t) {
    foreach ($t['fields'] ?? [] as $f) {
        foreach ($f['types'] as $ty) {
            if (str_contains($ty, 'Array') || str_ends_with($ty, '[]') || str_starts_with($ty, 'Array of')) {
                echo "array-like type in {$t['name']}.{$f['name']}: " . json_encode($f['types']) . PHP_EOL;
                break 3;
            }
        }
    }
}

// find Array of patterns
$count = 0;
foreach ($s['types'] as $t) {
    foreach ($t['fields'] ?? [] as $f) {
        foreach ($f['types'] as $ty) {
            if (str_starts_with($ty, 'Array of')) {
                echo "ARRAY: {$t['name']}.{$f['name']} => {$ty}\n";
                if (++$count >= 8) break 3;
            }
        }
    }
}
