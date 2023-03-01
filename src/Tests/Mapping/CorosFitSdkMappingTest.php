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

use Runalyze\Devices\Mapping\CorosFitSdkMapping;

class CorosFitSdkMappingTest extends \PHPUnit\Framework\TestCase
{
    protected CorosFitSdkMapping $Mapping;

    public function setUp(): void
    {
        $this->Mapping = new CorosFitSdkMapping();
    }

    public function testSomeExamples()
    {
        $this->assertEquals(158, $this->Mapping->toInternal(831));
        $this->assertEquals(159, $this->Mapping->toInternal(841));
        $this->assertNull($this->Mapping->toInternal(1));
    }
}
