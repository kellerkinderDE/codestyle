<?php

declare(strict_types=1);

namespace K10r\Codestyle;

final class PHP82 extends DefaultRules
{
    public static function getRules(): array
    {
        return array_merge(DefaultRules::getRules(), [
            '@PHP82Migration' => true,
        ]);
    }
}
