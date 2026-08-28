<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use Jeely\Cache\ArrayCache;
use Jeely\Cache\Cache;
use Jeely\Cache\FileCache;

return [
    'array_cache_set_get_delete' => function (): void {
        $cache = new ArrayCache();
        assertTrue($cache->set('greeting', 'salam', 60));
        assertSame('salam', $cache->get('greeting'));
        assertTrue($cache->has('greeting'));
        assertTrue($cache->delete('greeting'));
        assertFalse($cache->has('greeting'));
        assertSame('fallback', $cache->get('greeting', 'fallback'));
    },

    'array_cache_ttl_expiry' => function (): void {
        $cache = new ArrayCache();
        $cache->set('temp', 'x', 1);
        assertTrue($cache->has('temp'));
        sleep(2);
        assertFalse($cache->has('temp'));
        assertSame(null, $cache->get('temp'));
    },

    'array_cache_remember' => function (): void {
        $cache = new ArrayCache();
        $hits = 0;
        $value = $cache->remember('calc', 30, function () use (&$hits) {
            $hits++;

            return 7;
        });
        $again = $cache->remember('calc', 30, function () use (&$hits) {
            $hits++;

            return 99;
        });

        assertSame(7, $value);
        assertSame(7, $again);
        assertSame(1, $hits);
    },

    'file_cache_persists' => function (): void {
        $dir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'jeely-cache-' . bin2hex(random_bytes(4));
        $cache = new FileCache($dir);

        try {
            $cache->set('user.1', ['id' => 1, 'name' => 'ali']);
            assertSame(['id' => 1, 'name' => 'ali'], $cache->get('user.1'));
            assertTrue($cache->has('user.1'));
            $cache->clear();
            assertFalse($cache->has('user.1'));
        } finally {
            foreach (glob($dir . DIRECTORY_SEPARATOR . '*') ?: [] as $file) {
                @unlink($file);
            }
            @rmdir($dir);
        }
    },

    'cache_facade_default_array' => function (): void {
        Cache::setDefault(new ArrayCache());
        Cache::set('k', 'v');
        assertSame('v', Cache::get('k'));
        assertTrue(Cache::has('k'));
        Cache::delete('k');
        assertFalse(Cache::has('k'));
    },
];
