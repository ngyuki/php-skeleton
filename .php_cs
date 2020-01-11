<?php
$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->path('bin/')
    ->path('src/')
    ->path('tests/')
;

return PhpCsFixer\Config::create()
    ->setFinder($finder)
    ->setRules([
        '@PSR2' => true,
    ])
;
