<?php

/*
 * This file is part of the Runalyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Runalyze\Devices\Device;

class AppleIphone16E extends AbstractDevice
{
    use AppleDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::APPLE_IPHONE_16_E;
    }

    public function getName(): string
    {
        return 'iPhone 16 E';
    }
}
