<?php

namespace K10r\Codestyle;

final class PHP80 extends DefaultRules
{
    /**
     * {@inheritdoc}
     */
    public static function getRules()
    {
        return PHP74::getRules();
    }
}
