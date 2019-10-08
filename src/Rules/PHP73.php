<?php

namespace K10rFixer\Rules;

final class PHP73 extends DefaultRules
{
    /**
     * @return array
     */
    public static function getRules()
    {
        return PHP72::getRules();
    }
}
