<?php

declare(strict_types=1);

namespace K10r\Codestyle;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

abstract class DefaultRules
{
    public const RULES = [
        '@PSR2'                               => true,
        '@Symfony'                            => true,
        '@DoctrineAnnotation'                 => true,
        'no_useless_else'                     => true,
        'no_useless_return'                   => true,
        'ordered_class_elements'              => true,
        'ordered_imports'                     => true,
        'phpdoc_order'                        => true,
        'Kellerkinder/single_line_annotation' => true,
        'Kellerkinder/automatic_comments'     => true,
        'phpdoc_summary'                      => false,
        'phpdoc_types_order'                  => true,
        'return_assignment'                   => true,
        'phpdoc_align'                        => [
            'align' => 'vertical',
            'tags'  => [
                'param',
                'property',
                'property-read',
                'property-write',
                'return',
                'throws',
                'type',
                'var',
                'method',
            ],
        ],
        'phpdoc_to_comment'                      => false,
        'yoda_style'                             => false,
        'phpdoc_var_without_name'                => false,
        'multiline_whitespace_before_semicolons' => true,
        'no_unused_imports'                      => true,
        'no_superfluous_phpdoc_tags'             => true,
        'concat_space'                           => [
            'spacing' => 'one',
        ],
        'blank_line_before_statement' => [
            'statements' => [
                'break',
                'continue',
                'do',
                'exit',
                'if',
                'return',
                'switch',
                'try',
                'yield',
            ],
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
        'phpdoc_to_return_type'      => true,
        'declare_strict_types'       => true,
        'ternary_to_null_coalescing' => true,
        'void_return'                => true,
        'visibility_required'        => [
            'elements' => [
                'const',
                'property',
                'method',
            ],
        ],
    ];

    public static function getRules(): array
    {
        return self::RULES;
    }

    /**
     * @param array $additionalRules
     * @param bool  $usingCache
     */
    public static function create(Finder $finder = null, $additionalRules = [], $usingCache = true): Config
    {
        $newConfig = new Config();

        if ($finder) {
            $newConfig->setFinder($finder);
        }

        return $newConfig->setUsingCache($usingCache)
            ->setRules(
                array_merge(
                    static::getRules(),
                    $additionalRules
                )
            )
            ->setRiskyAllowed(true)
            ->registerCustomFixers(CustomFixer::getCustomFixer());
    }
}
