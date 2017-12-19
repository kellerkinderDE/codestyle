<?php

namespace Kellerkinder\Codestyles;

use PhpCsFixer\Config;

/**
 * Class PHP72
 */
final class PHP72 extends Config
{
    /**
     * PHP72 constructor.
     */
    public function __construct()
    {
        parent::__construct('Kellerkinder PHP 7.2 config');
    }

    /**
     * @return array
     */
    public function getRules()
    {
        return [
            '@PSR2'                      => true,
            '@Symfony'                   => true,
            '@DoctrineAnnotation'        => true,
            'no_useless_else'            => true,
            'no_useless_return'          => true,
            'ordered_class_elements'     => true,
            'ordered_imports'            => true,
            'phpdoc_order'               => true,
            'ternary_to_null_coalescing' => true,
            'visibility_required'        => [
                'const',
                'property',
                'method',
            ],
            'phpdoc_summary'             => false,
            'phpdoc_to_comment'          => false,
            'yoda_style'                 => false,
            'phpdoc_var_without_name'    => false,
            'concat_space'               => [
                'spacing' => 'one',
            ],
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'no_multiline_whitespace_before_semicolons' => true,
            'binary_operator_spaces'                    => [
                'operators' => [
                    '=>' => 'align',
                    '='  => 'align',
                ],
            ],
        ];
    }
}
