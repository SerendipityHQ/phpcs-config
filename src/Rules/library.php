<?php

return [
    'header_comment'                        => ['header' => $header],
    '@Symfony'                              => true,

    // Symfony overwritings
    'binary_operator_spaces'                => [
        'operators' => [
            '='  => 'align',
            '=>' => 'align',
        ],
    ],
    'concat_space'                          => ['spacing' => 'one'],
    'phpdoc_to_comment'                     => false,

    // Other rules
    'align_multiline_comment'               => true,
    'array_syntax'                          => ['syntax' => 'short'],
    'blank_line_before_statement'           => true,
    'combine_consecutive_unsets'            => true,
    'linebreak_after_opening_tag'           => true,
    'list_syntax'                           => ['syntax' => 'short'],
    'no_null_property_initialization'       => true,
    'no_superfluous_phpdoc_tags'            => false,
    'no_unreachable_default_argument_value' => true,
    'no_useless_else'                       => true,
    'no_useless_return'                     => true,
    'not_operator_with_space'               => true,
    'not_operator_with_successor_space'     => true,
    'ordered_imports'                       => true,
    'phpdoc_add_missing_param_annotation'   => true,
    'phpdoc_order'                          => true,
    'phpdoc_types_order'                    => ['null_adjustment' => 'always_last'],
    'phpdoc_var_without_name'               => false,
    'single_line_comment_style'             => ['comment_types' => ['hash']],
    'strict_comparison'                     => true,
];
