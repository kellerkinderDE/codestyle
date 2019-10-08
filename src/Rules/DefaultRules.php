<?php

namespace K10rFixer\Rules;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

abstract class DefaultRules
{
    const RULES = [
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
        'no_unused_imports'                         => true,
        'no_superfluous_phpdoc_tags'                => true,
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

    /**
     * @param array $additionalRules
     * @param bool  $usingCache
     *
     * @return Config
     */
    public static function create(Finder $finder, $additionalRules = [], $usingCache = true)
    {
        return Config::create()
            ->setFinder($finder)
            ->setUsingCache($usingCache)
            ->setRules(
                array_merge(
                    self::getRules(),
                    $additionalRules
                )
            );
    }
}