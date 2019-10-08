<?php

namespace K10rFixer\Rules;

final class PHP71 extends DefaultRules
{
    /**
     * @return array
     */
    public static function getRules()
    {
        return array_merge(
            PHP70::getRules(),
            [
                'ternary_to_null_coalescing' => true,
                'void_return'                => true,
                'visibility_required'        => [
                    'const',
                    'property',
                    'method',
                ],
            ]
        );
    }
}
