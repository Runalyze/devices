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

use Runalyze\Devices\Mapping\FitSdkMapping;

class FITMappingTest extends \PHPUnit_Framework_TestCase
{
    public function testThatAllClassesExist()
    {
        $this->assertEquals(22, FitSdkMapping::getEnum(2132));
        $this->assertEquals(23, FitSdkMapping::getEnum(2691));
        $this->assertEquals(82, FitSdkMapping::getEnum(474));
    }
}
