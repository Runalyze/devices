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

class NameMappingTest extends \PHPUnit_Framework_TestCase
{
    public function testThatAllClassesExist()
    {
        $this->assertEquals(144, NameMapping::getEnum('Navime - http://www.navime.pl'));
        $this->assertEquals(152, NameMapping::getEnum('Smashrun'));
        $this->assertEquals(136, NameMapping::getEnum('Run.GPS Community Server'));
        $this->assertEquals(null, NameMapping::getEnum('foobla'));
    }
}
