<?php

declare(strict_types=1);

$config = new PhpCsFixer\Config();

return $config
    ->setRules(['@PSR12' => true])
    ->setFinder(PhpCsFixer\Finder::create()->in(__DIR__ . '/Classes')->in(__DIR__ . '/Tests'));
