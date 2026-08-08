<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

return [
    'casts_primitive_arrays' => function (): void {
        // Dummy TL object
        $obj = new class ([
            'scores' => ['1', 2, 3.7],
            'labels' => [1, '2'],
        ]) extends \Jeely\Nectar {
            public const JSON_PROPERTY_MAP = [
                'scores' => 'int[]',
                'labels' => 'string[]',
            ];
        };

        assertEquals([1, 2, 3], $obj->scores, 'int[] casting failed');
        assertEquals(['1', '2'], $obj->labels, 'string[] casting failed');
    },

    'magic_get_set_unset' => function (): void {
        $obj = new class ([
            'update_id' => 10,
        ]) extends \Jeely\Nectar {
            public const JSON_PROPERTY_MAP = [
                'update_id' => 'int',
            ];
        };

        assertEquals(10, $obj->getUpdateId(), 'getUpdateId failed');

        $obj->setUpdateId(11);
        assertEquals(11, $obj->update_id, 'setUpdateId / __set failed');

        $obj->unsetUpdateId();
        assertTrue(isset($obj->update_id) === false, 'unsetUpdateId failed');
    },
];

