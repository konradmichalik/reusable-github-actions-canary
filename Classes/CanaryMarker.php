<?php

declare(strict_types=1);

namespace Konradmichalik\ReusableGithubActionsCanary;

use TYPO3\CMS\Core\SingletonInterface;

final class CanaryMarker implements SingletonInterface
{
    public function isAlive(): bool {
        return true;
    }
}
