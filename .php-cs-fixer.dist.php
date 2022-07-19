<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->ignoreDotFiles(true)
    ->ignoreVCSIgnored(true)
    ->exclude(__DIR__ . '/vendor')
    ->in([__DIR__ . '/src',__DIR__ . '/tests'])
;

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PHP72Migration' => true,
        '@PHP72Migration:risky' => true,
        '@PHPUnit84Migration:risky' => true,
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        'heredoc_indentation' => false,
        'use_arrow_functions' => false,
        'concat_space' => ['spacing' => 'one'],
        'general_phpdoc_tag_rename' => ['replacements' => ['inheritDocs' => 'inheritDoc'], 'fix_annotation' => true],
        'phpdoc_align' => ['align' => 'left'],
        'phpdoc_order' => true,
        // 'phpdoc_summary' => true, // 中文注释使用中文句号
        'phpdoc_to_comment' => ['ignored_tags' => ['todo', 'var']],
    ])
    ->setFinder($finder)
;

return $config;
