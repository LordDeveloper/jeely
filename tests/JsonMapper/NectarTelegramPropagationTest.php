<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

/**
 * Named classes (instead of anonymous) so JsonMapper type-name resolution works.
 */
class JsonChild extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'name' => 'string',
    ];

    public function telegramInstance(): ?\Jeely\Telegram
    {
        return $this->telegram;
    }
}

class NamedParent extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'children' => 'JsonChild[]',
    ];

    protected function boot(): void
    {
        $this->share([
            'scope' => 'parent',
            'label' => 'from-boot',
        ]);
    }
}

return [
    'share_sets_nested_telegram' => function (): void {
        $telegram = new \Jeely\Telegram('123:ABC');

        $parent = new NamedParent([
            'children' => [
                ['name' => 'c1'],
                ['name' => 'c2'],
            ],
        ]);

        $parent->withTelegram($telegram);

        assertEquals('c1', $parent->children[0]->name);
        assertSame($telegram, $parent->children[0]->telegramInstance());
        assertSame($telegram, $parent->children[1]->telegramInstance());
        assertEquals('from-boot', $parent->shared('label'));
        assertEquals('from-boot', $parent->children[0]->shared('label'));
        assertEquals('parent', $parent->children[1]->shared('scope'));
    },

    'share_array_merges_without_rebinding_telegram' => function (): void {
        $telegram = new \Jeely\Telegram('123:ABC');

        $parent = new NamedParent([
            'children' => [
                ['name' => 'c1'],
            ],
        ]);

        $parent->withTelegram($telegram);
        $parent->share(['extra' => 42]);

        assertSame($telegram, $parent->children[0]->telegramInstance());
        assertEquals(42, $parent->shared('extra'));
        assertEquals(42, $parent->children[0]->shared('extra'));
        assertEquals('from-boot', $parent->children[0]->shared('label'));
    },
];
