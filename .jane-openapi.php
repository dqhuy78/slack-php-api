<?php

$directory = __DIR__ . '/generated/';

if (!empty($_SERVER['CI_TEST'])) {
    $directory = __DIR__ . '/ci_generated/';
}

return [
    'openapi-file' => __DIR__ . '/resources/slack-openapi-patched.json',
    'namespace' => 'JoliCode\Slack\Api',
    'directory' => $directory,
    'reference' => true,
    'strict' => false,
    'clean-generated' => true,
    'use-fixer' => true,
    'fixer-config-file' => __DIR__ . '/.php-cs-fixer.php',
];
