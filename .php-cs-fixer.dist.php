<?php

/**
 * Rules we follow are from PSR-2 as well as the rectified PSR-2 guide.
 *
 * - https://github.com/FriendsOfPHP/PHP-CS-Fixer
 * - https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
 * - https://github.com/php-fig-rectified/fig-rectified-standards/blob/master/PSR-2-R-coding-style-guide-additions.md
 *
 * If something isn't addressed in either of those, some other common community rules are
 * used that might not be addressed explicitly in PSR-2 in order to improve code quality
 * (so that devs don't need to comment on them in Code Reviews).
 *
 * For instance: removing trailing white space, removing extra line breaks where
 * they're not needed (back to back, beginning or end of function/class, etc.),
 * adding trailing commas in the last line of an array, etc.
 */
$finder = PhpCsFixer\Finder::create()
    ->exclude('node_modules')
    ->exclude('vendor')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();
$config->setRules([
    '@Symfony'                          => true,
    'array_syntax'                      => ['syntax' => 'short'],
    'array_indentation'                 => true,
    'binary_operator_spaces'            => ['operators' => ['=>' => 'align']],
    'increment_style'                   => ['style' => 'post'],
    'linebreak_after_opening_tag'       => true,
    'no_useless_else'                   => true,
    'no_useless_return'                 => true,
    'not_operator_with_successor_space' => true,
    'ordered_imports'                   => ['sort_algorithm' => 'length'],
    'phpdoc_order'                      => true,
    'simplified_null_return'            => true,
    'no_superfluous_phpdoc_tags'        => false,
    // new config for php-cs-fixer
    // '@PSR2' => true,
    // '@Symfony' => true,
    // 'array_syntax' => [ 'syntax' => 'short' ],
    // 'cast_spaces' => true,
    // 'combine_consecutive_unsets' => true,
    // 'concat_space' => [ 'spacing' => 'one' ],
    // 'linebreak_after_opening_tag' => true,
    // 'no_blank_lines_after_class_opening' => true,
    // 'no_blank_lines_after_phpdoc' => true,
    // 'no_extra_blank_lines' => true,
    // 'no_trailing_comma_in_singleline_array' => true,
    // 'no_whitespace_in_blank_line' => true,
    // 'no_spaces_around_offset' => true,
    // 'no_unused_imports' => true,
    // 'no_useless_else' => true,
    // 'no_useless_return' => true,
    // 'no_whitespace_before_comma_in_array' => true,
    // 'normalize_index_brace' => true,
    // 'phpdoc_indent' => true,
    // 'phpdoc_to_comment' => true,
    // 'phpdoc_trim' => true,
    // 'single_quote' => true,
    // 'ternary_to_null_coalescing' => true,
    // 'trailing_comma_in_multiline' => true,
    // 'trim_array_spaces' => true,
    // 'no_break_comment' => false,
    // 'blank_line_before_statement' => true,
    // 'no_superfluous_phpdoc_tags' => false,
    // 'simplified_null_return' => true,
    // 'phpdoc_order' => true,
    // 'ordered_imports' => ['sort_algorithm' => 'length'],
    // 'array_syntax' => ['syntax' => 'short'],
    // 'array_indentation' => true,
    // 'binary_operator_spaces' => ['operators' => ['=>' => 'align']],
    // 'increment_style' => ['style' => 'post'],
    // 'linebreak_after_opening_tag' => true,
    // 'no_useless_else' => true,
    // 'no_useless_return' => true,
    // 'not_operator_with_successor_space' => true,
])
->setFinder($finder);

return $config;
