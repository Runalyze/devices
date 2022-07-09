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

class CycplusM1 extends AbstractDevice
{
    use BrytonDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::CYCPLUS_M1;
    }

    public function getName()
    {
        return 'M1';
    }

    public function hasBarometer()
    {
        return true;
    }
}
