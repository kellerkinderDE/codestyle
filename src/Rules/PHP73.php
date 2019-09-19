<?php

namespace K10rFixer\Rules;

final class PHP73 extends DefaultRules
{
    /**
     * @return array
     */
    public static function getRules()
    {
        return array_merge(
            self::RULES,
            [
                'ternary_to_null_coalescing' => true,
                'visibility_required'        => [
                    'const',
                    'property',
                    'method',
                ],
            ]
        );
    }
}
