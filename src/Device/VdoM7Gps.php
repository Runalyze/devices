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

class VdoM7Gps extends AbstractDevice
{
    use VdoDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::VDO_M_7_GPS;
    }

    public function getName(): string
    {
        return 'M7 GPS';
    }
}
