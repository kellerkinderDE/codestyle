<?php

namespace K10r\Codestyle;

use PhpCsFixer\Config;

/**
 * Class PHP71
 */
final class PHP71 extends Config
{
    /**
     * PHP71 constructor.
     */
    public function __construct()
    {
        parent::__construct('Kellerkinder PHP 7.1 config');
    }

    /**
     * @return array
     */
    public function getRules()
    {
        return [
            '@PSR2'                                     => true,
            '@Symfony'                                  => true,
            '@DoctrineAnnotation'                       => true,
            'no_useless_else'                           => true,
            'no_useless_return'                         => true,
            'ordered_class_elements'                    => true,
            'ordered_imports'                           => true,
            'phpdoc_order'                              => true,
            'ternary_to_null_coalescing'                => true,
            'phpdoc_summary'                            => false,
            'phpdoc_to_comment'                         => false,
            'yoda_style'                                => false,
            'phpdoc_var_without_name'                   => false,
            'no_multiline_whitespace_before_semicolons' => true,
            'concat_space'                              => [
                'spacing' => 'one',
            ],
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'visibility_required' => [
                'const',
                'property',
                'method',
            ],
            'binary_operator_spaces' => [
                'operators' => [
                    '=>' => 'align_single_space_minimal',
                    '='  => 'align_single_space_minimal',
                ],
            ],
        ];
    }
}
