<?php

namespace K10rFixer\Rules;

final class PHP72 extends DefaultRules
{
    /**
     * @return array
     */
    public static function getRules()
    {
        return PHP71::getRules();
    }
}
