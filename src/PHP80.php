<?php

declare(strict_types=1);

namespace K10r\Codestyle;

/**
 * @deprecated 4.0.0 Use @DefaultRules instead
 */
final class PHP80 extends DefaultRules
{
    public static function getRules(): array
    {
        return array_merge(DefaultRules::getRules(), [
            '@PHP80Migration' => true,
        ]);
    }
}
