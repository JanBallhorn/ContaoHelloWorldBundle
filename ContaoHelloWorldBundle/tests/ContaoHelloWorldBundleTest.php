<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace JanBallhorn\ContaoHelloWorldBundle\Tests;

use JanBallhorn\ContaoHelloWorldBundle\ContaoHelloWorldBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoHelloWorldBundle();

        $this->assertInstanceOf('JanBallhorn\ContaoHelloWorldBundle\ContaoHelloWorldBundle', $bundle);
    }
}
