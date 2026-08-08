<?php

$s = json_decode(file_get_contents(__DIR__ . '/../schema.json'), true);
echo 'version=' . $s['version'] . PHP_EOL;
echo 'types=' . count($s['types']) . PHP_EOL;
echo 'methods=' . count($s['methods']) . PHP_EOL;
echo 'keys=' . implode(',', array_keys($s)) . PHP_EOL;

$m = $s['methods'][0];
echo 'sample method=' . $m['name'] . PHP_EOL;
echo 'method keys=' . implode(',', array_keys($m)) . PHP_EOL;
echo 'returns=' . json_encode($m['returns'] ?? null) . PHP_EOL;
echo 'fields count=' . count($m['fields'] ?? []) . PHP_EOL;

$t = $s['types'][0];
echo 'sample type=' . $t['name'] . PHP_EOL;
echo 'type keys=' . implode(',', array_keys($t)) . PHP_EOL;

$withSubtypes = array_filter($s['types'], fn($x) => !empty($x['subtypes']));
echo 'types with subtypes=' . count($withSubtypes) . PHP_EOL;
foreach (array_slice($withSubtypes, 0, 5) as $x) {
    echo '  ' . $x['name'] . ' => ' . implode(',', $x['subtypes']) . PHP_EOL;
}

$existingTypes = glob(__DIR__ . '/../src/Jeely/Api/Types/*.php');
$existingMethods = glob(__DIR__ . '/../src/Jeely/Api/Methods/*.php');
echo 'existing types files=' . count($existingTypes) . PHP_EOL;
echo 'existing methods files=' . count($existingMethods) . PHP_EOL;

$schemaTypeNames = array_column($s['types'], 'name');
$schemaMethodNames = array_map(fn($m) => ucfirst($m['name']), $s['methods']);
echo 'new types sample: ' . implode(',', array_slice(array_diff($schemaTypeNames, array_map('basename', str_replace('.php', '', $existingTypes))), 0, 20)) . PHP_EOL;
