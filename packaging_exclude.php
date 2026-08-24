<?php

declare(strict_types=1);

/*
 * Required by release-typo3.yml's `tailor create-artefact` step, which
 * hard-fails if this file is absent. See
 * https://github.com/konradmichalik/reusable-github-actions/issues/48
 */

return [
    'directories' => [
        '.build',
        '.git',
        '.github',
        'Tests',
        'vendor',
    ],
    'files' => [
        '.editorconfig',
        '.gitattributes',
        '.gitignore',
        'composer.lock',
        'packaging_exclude.php',
        '.php-cs-fixer.dist.php',
        'phpstan.neon',
        'phpunit.xml.dist',
        'rector.php',
    ],
];
