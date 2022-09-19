<?php

declare(strict_types=1);

namespace K10r\Codestyle;

final class PHP81 extends DefaultRules
{
    /**
     * {@inheritdoc}
     */
    public static function getRules(): array
    {
        return array_merge(PHP80::getRules(), [
            '@PHP81Migration' => true,
        ]);
    }
}
