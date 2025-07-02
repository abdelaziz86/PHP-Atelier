<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = (new PhpCsFixer\Finder())
    ->in([
        __DIR__ . '/src', // Adjust to your structure
        __DIR__ . '/tests',
    ]);

$config = new Config();

return $config
    ->setUnsupportedPhpVersionAllowed(true) // Allow execution on unsupported PHP versions
    ->setRules([
        '@PSR12' => true,
        // Add any other rules you want to enforce
    ])
    ->setFinder($finder)
    ->setUsingCache(true);
