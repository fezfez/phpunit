<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Foo\Issue3877\Suite1;

use PHPUnit\Framework\TestCase;

class FakeTest extends TestCase
{
    public function testFirst(): void
    {
        $this->assertTrue(true);
    }
}
