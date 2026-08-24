<?php

declare(strict_types=1);

namespace Konradmichalik\ReusableGithubActionsCanary\Tests;

use Konradmichalik\ReusableGithubActionsCanary\CanaryMarker;
use PHPUnit\Framework\TestCase;

final class CanaryMarkerTest extends TestCase
{
    public function testIsAlive(): void
    {
        self::assertTrue((new CanaryMarker())->isAlive());
    }
}
