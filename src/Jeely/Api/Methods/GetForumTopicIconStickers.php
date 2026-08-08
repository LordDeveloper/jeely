<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetForumTopicIconStickers
 * @description Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user. Requires no parameters. Returns an Array of Sticker objects.
 *
 *
 * @see https://core.telegram.org/bots/api#getforumtopiciconstickers
 */
class GetForumTopicIconStickers extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Sticker[]';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return Sticker[]
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
