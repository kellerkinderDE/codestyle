<?php

declare(strict_types=1);

namespace K10r\Codestyle;

final class PHP74 extends DefaultRules
{
    /**
     * {@inheritdoc}
     */
    public static function getRules(): array
    {
        return PHP73::getRules();
    }
}
