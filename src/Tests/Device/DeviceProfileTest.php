<?php

/*
 * This file is part of the Runalyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Runalyze\Devices\Tests\Device;

use Runalyze\Devices\Device\DeviceInterface;
use Runalyze\Devices\Device\DeviceProfile;

class DeviceProfileTest extends \PHPUnit\Framework\TestCase
{
    public function testThatAllClassesExist()
    {
        foreach (DeviceProfile::getEnum() as $enum) {
            $device = DeviceProfile::get($enum);

            $this->assertInstanceOf(DeviceInterface::class, $device);
            $this->assertEquals($enum, $device->getEnum());
            $this->assertNotEmpty($device->jsonSerialize());

            if (!strpos($device->getNameOfClass(), 'Unknown')) {
                $this->assertNotEmpty($device->getName());
            }
        }
    }

    public function testThatDeviceNamesDoNotStartWithDistributorName()
    {
        foreach (DeviceProfile::getEnum() as $enum) {
            $device = DeviceProfile::get($enum);
            $distributorName = $device->getDistributor()->getName();

            if ('' !== $distributorName) {
                $this->assertNotEquals($distributorName, substr($device->getName(), 0, strlen($distributorName)));
            }
        }
    }
}
