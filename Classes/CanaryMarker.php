<?php

declare(strict_types=1);

namespace Konradmichalik\ReusableGithubActionsCanary;

final class CanaryMarker
{
    public function isAlive(): bool
    {
        return true;
    }
}
