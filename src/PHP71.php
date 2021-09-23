<?php

namespace K10r\Codestyle;

final class PHP71 extends DefaultRules
{
    /**
     * {@inheritdoc}
     */
    public static function getRules()
    {
        return array_merge(
            self::getRules(),
            [
                'phpdoc_to_return_type'      => true,
                'declare_strict_types'       => true,
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
