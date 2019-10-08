<?php

namespace K10rFixer\Rules;

final class PHP70 extends DefaultRules
{
    /**
     * @return array
     */
    public static function getRules()
    {
        return array_merge(
            PHP56::RULES,
            [
                'phpdoc_to_return_type'      => true,
                'declare_strict_types'       => true,
                'ternary_to_null_coalescing' => true,
            ]
        );
    }
}