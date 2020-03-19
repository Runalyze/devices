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

class AppleIphone4S extends AbstractDevice
{
    use AppleDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::APPLE_IPHONE_4_S;
    }

    public function getName()
    {
        return 'iPhone 4S';
    }
}
