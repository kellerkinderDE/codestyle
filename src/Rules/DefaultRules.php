<?php

namespace K10rFixer\Rules;

abstract class DefaultRules
{
    public const RULES = [
        '@PSR2'                                     => true,
        '@Symfony'                                  => true,
        '@DoctrineAnnotation'                       => true,
        'no_useless_else'                           => true,
        'no_useless_return'                         => true,
        'ordered_class_elements'                    => true,
        'ordered_imports'                           => true,
        'phpdoc_order'                              => true,
        'Kellerkinder/single_line_annotation'       => true,
        'Kellerkinder/automatic_comments'           => true,
        'phpdoc_summary'                            => false,
        'phpdoc_types_order'                        => true,
        'return_assignment'                         => true,
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

    public static function getRules()
    {
        return self::RULES;
    }
}
