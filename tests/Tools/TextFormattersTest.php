<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use Jeely\Tools\Html;
use Jeely\Tools\Markdown;
use Jeely\Tools\MarkdownLegacy;

return [
    'html_escapes_special_chars' => function (): void {
        assertEquals('&lt;b&gt; &amp; &quot;hi&quot;', Html::escape('<b> & "hi"'));
        assertEquals('plain', Html::text('plain'));
    },

    'html_text_styles' => function (): void {
        assertEquals('<b>bold</b>', Html::bold('bold'));
        assertEquals('<i>italic</i>', Html::italic('italic'));
        assertEquals('<u>under</u>', Html::underline('under'));
        assertEquals('<s>strike</s>', Html::strikethrough('strike'));
        assertEquals('<tg-spoiler>secret</tg-spoiler>', Html::spoiler('secret'));
        assertEquals('<code>a &lt; b</code>', Html::code('a < b'));
        assertEquals('<pre>line</pre>', Html::pre('line'));
        assertEquals(
            '<pre><code class="language-php">echo 1;</code></pre>',
            Html::pre('echo 1;', 'php'),
        );
    },

    'html_links_and_aliases' => function (): void {
        assertEquals(
            '<a href="https://example.com?q=1&amp;a=2">Click</a>',
            Html::link('https://example.com?q=1&a=2', 'Click'),
        );
        assertEquals(
            '<a href="https://example.com">https://example.com</a>',
            Html::href('https://example.com'),
        );
        assertEquals(
            '<a href="https://example.com">Docs</a>',
            Html::hyperlink('https://example.com', 'Docs'),
        );
        assertEquals(
            '<a href="tg://user?id=123">Alice</a>',
            Html::mention(123, 'Alice'),
        );
    },

    'html_custom_emoji_and_blockquote' => function (): void {
        assertEquals(
            '<tg-emoji emoji-id="5368324170671202286">👍</tg-emoji>',
            Html::emoji('5368324170671202286', '👍'),
        );
        assertEquals('<blockquote>quote</blockquote>', Html::blockquote('quote'));
        assertEquals(
            '<blockquote expandable="expandable">more</blockquote>',
            Html::expandableBlockquote('more'),
        );
        assertTrue(str_contains(Html::time(1647531900, '22:45', 'wDT'), 'tg://time?unix=1647531900&amp;format=wDT'));
    },

    'html_join_and_style_concatenation' => function (): void {
        assertEquals(
            Html::bold('Hi ') . Html::italic('there'),
            Html::join([Html::bold('Hi '), Html::italic('there')]),
        );
    },

    'markdown_v2_escapes_special_chars' => function (): void {
        assertEquals('plain', Markdown::escape('plain'));
        assertEquals('\\*bold\\*', Markdown::escape('*bold*'));
        assertEquals('a\\.b\\!', Markdown::escape('a.b!'));
    },

    'markdown_v2_text_styles' => function (): void {
        assertEquals('*bold*', Markdown::bold('bold'));
        assertEquals('_italic_', Markdown::italic('italic'));
        assertEquals('__under__', Markdown::underline('under'));
        assertEquals('~strike~', Markdown::strikethrough('strike'));
        assertEquals('||secret||', Markdown::spoiler('secret'));
        assertEquals('`a < b`', Markdown::code('a < b'));
        assertEquals("```\nline\n```", Markdown::pre('line'));
        assertEquals("```php\necho 1;\n```", Markdown::pre('echo 1;', 'php'));
    },

    'markdown_v2_links_and_aliases' => function (): void {
        assertEquals(
            '[Click](https://example.com)',
            Markdown::link('Click', 'https://example.com'),
        );
        assertEquals(
            '[Docs](https://example.com)',
            Markdown::href('https://example.com', 'Docs'),
        );
        assertEquals(
            '[tg://user?id\\=123](tg://user?id=123)',
            Markdown::hyperlink('tg://user?id=123'),
        );
        assertEquals(
            '[Alice](tg://user?id=123)',
            Markdown::mention(123, 'Alice'),
        );
    },

    'markdown_v2_custom_emoji_and_blockquote' => function (): void {
        assertEquals(
            '![👍](tg://emoji?id=5368324170671202286)',
            Markdown::emoji('👍', '5368324170671202286'),
        );
        assertEquals(">line one\n>line two", Markdown::blockquote("line one\nline two"));
        assertTrue(str_contains(Markdown::expandableBlockquote("first\nsecond"), '**>first'));
        assertTrue(str_contains(Markdown::expandableBlockquote('only'), '||'));
    },

    'markdown_legacy_basic' => function (): void {
        assertEquals('*bold*', MarkdownLegacy::bold('bold'));
        assertEquals('_italic_', MarkdownLegacy::italic('italic'));
        assertEquals('[Site](https://example.com)', MarkdownLegacy::link('Site', 'https://example.com'));
        assertEquals('\\*not bold\\*', MarkdownLegacy::escape('*not bold*'));
    },
];
