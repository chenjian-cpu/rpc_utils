<?php

$header = <<<'EOF'
This file is part of the KKGUAN Service.

(c) KKGUAN Service <>

本文件属于KK馆版权所有，泄漏必究。
This file belong to KKGUAN, all rights reserved.
EOF;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2'               => true,
        '@Symfony'            => true,
        '@DoctrineAnnotation' => true,
        '@PhpCsFixer'         => true,
        'header_comment'      => [
            'commentType' => 'PHPDoc',
            'header'      => $header,
            'separate'    => 'none',
            'location'    => 'after_declare_strict',
        ],
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'list_syntax' => [
            'syntax' => 'short',
        ],
        'concat_space' => [
            'spacing' => 'one',
        ],
        'no_superfluous_phpdoc_tags' => [
            'allow_mixed' => false,
        ],
        'blank_line_before_statement' => [
            'statements' => [
                'declare',
            ],
        ],
        'binary_operator_spaces' => [
            'operators' => [
                '=>' => 'align',
            ],
        ],
        'general_phpdoc_annotation_remove' => [
            'annotations' => [
                'author',
            ],
        ],
        'ordered_imports' => [
            'imports_order' => [
                'class', 'function', 'const',
            ],
            'sort_algorithm' => 'alpha',
        ],
        'single_line_comment_style' => [
            'comment_types' => [
            ],
        ],
        'list_syntax' => [
            'syntax' => 'short',
        ],
        'yoda_style' => [
            'always_move_variable' => true,
            'equal'                => true,
            'identical'            => true,
        ],
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'no_multi_line',
        ],
        'single_line_comment_style' => [
            'comment_types' => ['hash'],
        ],
        'class_attributes_separation'       => true,
        'combine_consecutive_unsets'        => true,
        'declare_strict_types'              => true,
        'linebreak_after_opening_tag'       => true,
        'lowercase_constants'               => true,
        'lowercase_static_reference'        => true,
        'no_useless_else'                   => true,
        'no_unused_imports'                 => true,
        'not_operator_with_successor_space' => true,
        'not_operator_with_space'           => false,
        'ordered_class_elements'            => true,
        'ordered_imports'                   => true,
        'php_unit_strict'                   => false,
        'phpdoc_separation'                 => false,
        'single_quote'                      => true,
        'standardize_not_equals'            => true,
        'multiline_comment_opening_closing' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('public')
            ->exclude('resources')
            ->exclude('config')
            ->exclude('runtime')
            ->exclude('vendor')
            ->in(__DIR__)
    )
    ->setUsingCache(false);