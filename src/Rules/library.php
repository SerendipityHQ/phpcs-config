<?php

return [
    '@Symfony'                               => true,
    'align_multiline_comment'                => true,
    'array_syntax'                           => [
        'syntax' => 'short',
    ],
    'binary_operator_spaces'                 => [
        'default' => 'align',
    ],
    'blank_line_before_statement'            => true,
    'class_attributes_separation'            => [
        'elements' => [
            [
                'const' => 'none',
                'method' => 'one',
                'property' => 'none',
                'trait_import' => 'none',
                'case' => 'none',
                ],
            ],
        ],
    'combine_consecutive_unsets'             => true,
    'concat_space'                           => [
        'spacing' => 'one',
        ],
    'declare_strict_types'                   => true,
    'echo_tag_syntax'                        => true,
    'fully_qualified_strict_types'           => true,
    'general_phpdoc_annotation_remove'       => [
        'annotations' => [
            'throws',
            ],
        ],
    'global_namespace_import'                => [
        'import_classes' => false,
        'import_constants' => false,
        'import_functions' => false,
        ],
    'header_comment'                         => [
        'header' => $header,
        ],
    'linebreak_after_opening_tag'            => true,
    'list_syntax'                            => [
        'syntax' => 'short',
        ],
    'multiline_whitespace_before_semicolons' => false,
    'no_null_property_initialization'        => true,
    'no_superfluous_phpdoc_tags'             => [
        'allow_mixed' => false,
        'remove_inheritdoc' => true,
        'allow_unused_params' => false,
        ],
    'no_unreachable_default_argument_value'  => true,
    'no_unused_imports'                      => true,
    'no_useless_else'                        => true,
    'no_useless_return'                      => true,
    'not_operator_with_space'                => true,
    'not_operator_with_successor_space'      => true,
    'ordered_class_elements'                 => [
        'order' => [
            'use_trait',
            'constant_public',
            'constant_protected',
            'constant_private',
            'property_public',
            'property_protected',
            'property_private',
            'construct',
            'magic',
            'phpunit',
            'method_public',
            'method_protected',
            'method_private',
            'destruct',
            ],
        ],
    'ordered_imports'                        => [
        'sort_algorithm' => 'alpha',
        'imports_order' => [
            'class',
            'function',
            'const',
            ],
        ],
    'phpdoc_add_missing_param_annotation'    => true,
    'phpdoc_line_span'                       => [
        'const' => 'single',
        'method' => 'multi',
        'property' => 'single',
        ],
    'phpdoc_order'                           => true,
    'phpdoc_to_comment'                      => false,
    'phpdoc_types_order'                     => [
        'null_adjustment' => 'always_last',
        ],
    'phpdoc_var_without_name'                => false,
    'single_line_comment_style'              => true,
    'strict_comparison'                      => true,
];
