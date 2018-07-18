<?php

namespace K10r\Codestyle;

use K10r\Codestyle\Fixers\Comment\AutomaticCommentsFixer;
use K10r\Codestyle\Fixers\Comment\MultiToSingleLineAnnotationFixer;
use PhpCsFixer\Config;

final class PHP56 extends Config
{
    public function __construct()
    {
        parent::__construct('Kellerkinder PHP 5.6 config');
    }

    public static function create()
    {
        $factory = parent::create();

        $factory->registerCustomFixers([
            new AutomaticCommentsFixer(),
            new MultiToSingleLineAnnotationFixer(),
        ]);

        return $factory;
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
    }
}
