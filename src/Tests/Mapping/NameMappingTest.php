<?php

/*
 * This file is part of the Runalyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Runalyze\Devices\Tests\Mapping;

use Runalyze\Devices\Mapping\NameMapping;

class NameMappingTest extends \PHPUnit\Framework\TestCase
{
    protected NameMapping $Mapping;

    public function setUp(): void
    {
        $this->Mapping = new NameMapping();
    }

    public function testSomeExamples()
    {
        $this->assertEquals(144, $this->Mapping->toInternal('Navime - http://www.navime.pl'));
        $this->assertEquals(152, $this->Mapping->toInternal('Smashrun'));
        $this->assertEquals(136, $this->Mapping->toInternal('Run.GPS Community Server'));
        $this->assertNull($this->Mapping->toInternal('foobla'));
    }
}
