<?php

declare(strict_types=1);

namespace Examples\Shopbot;

use Jeely\Tools\Html;

final class ShopEmoji
{
    /** @var array<string, string> */
    public const IDS = [
        'shop' => '5296385246579670377',
        'cart' => '5249231689695115145',
        'tea' => '5258089153505009279',
        'coffee' => '5323761960829862762',
        'cake' => '5359719332542718652',
        'plus' => '5258108352008823107',
        'minus' => '5275969776668134187',
        'check' => '5260416304224936047',
        'ok' => '5260726538302660868',
        'cancel' => '5260342697075416641',
        'back' => '5258236805890710909',
        'forward' => '5260450573768990626',
        'note' => '5296348778012361146',
        'skip' => '5260233433107407649',
        'wallet' => '5258204546391351475',
        'qty' => '5258330865674494479',
        'edit' => '5296348778012361146',
        'paid' => '5258057130228849960',
        'user' => '5260399854500191689',
        'username' => '5257991477358763590',
        'user_id' => '5258503720928288433',
        'total' => '5296385246579670377',
        'bell' => '5260264520080695245',
        'reject' => '5260342697075416641',
    ];

    /** @var array<string, string> */
    public const ALT = [
        'shop' => '🏷', 'cart' => '🛒', 'tea' => '☀️', 'coffee' => '⚡', 'cake' => '💎',
        'plus' => '➕', 'minus' => '➖', 'check' => '✅', 'ok' => '✔️', 'cancel' => '❌',
        'back' => '🔙', 'forward' => '➡️', 'note' => '📝', 'skip' => '⏭', 'wallet' => '💳',
        'qty' => '🔢', 'edit' => '✏️', 'paid' => '✅', 'user' => '👤', 'username' => '🔗',
        'user_id' => '🆔', 'total' => '💰', 'bell' => '🔔', 'reject' => '❌',
    ];

    public static function rich(string $key): string
    {
        return sprintf('![](tg://emoji?id=%s)', self::IDS[$key]);
    }

    public static function html(string $key): string
    {
        return Html::emoji(self::IDS[$key], self::ALT[$key] ?? '⭐');
    }
}
