<?php

namespace K10r\Codestyle;

use PhpCsFixer\Config;

/**
 * Class PHP56
 */
final class PHP56 extends Config
{
    /**
     * PHP56 constructor.
     */
    public function __construct()
    {
        parent::__construct('Kellerkinder PHP 5.6 config');
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
            'phpdoc_summary'                            => false,
            'phpdoc_types_order'                        => true,
            'return_assignment'                         => true,
            'no_superfluous_phpdoc_tags'                => true,
            'phpdoc_align'                              => true,
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
            'binary_operator_spaces' => [
                'operators' => [
                    '=>' => 'align_single_space_minimal',
                    '='  => 'align_single_space_minimal',
                ],
            ],
        ];
    }
}
