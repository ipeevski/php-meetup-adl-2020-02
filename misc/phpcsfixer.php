<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/../src');

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        '@PhpCsFixer' => true,
        '@PHP71Migration' => true,
        'backtick_to_shell_exec' => true,
        'class_keyword_remove' => true,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'increment_style' => ['style' => 'post'],
        'blank_line_before_statement' => ['statements' => ['declare', 'return', 'throw', 'try']],
        'no_extra_blank_lines' => true,
        'trailing_comma_in_multiline_array' => false,
        'yoda_style' => false,
        'phpdoc_summary' => true
      ])
    ->setCacheFile(__DIR__ . '/.php_cs.cache')
	->setFinder($finder);
