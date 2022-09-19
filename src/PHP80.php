<?php

declare(strict_types=1);

namespace K10r\Codestyle;

final class PHP80 extends DefaultRules
{
    /**
     * {@inheritdoc}
     */
    public static function getRules(): array
    {
        return array_merge(PHP74::getRules(), [
            '@PHP80Migration' => true,
        ]);
    }
}
