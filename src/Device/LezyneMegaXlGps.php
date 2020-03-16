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

class LezyneMegaXlGps extends AbstractDevice
{
    use LezyneDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::LEZYNE_MEGA_XL_GPS;
    }

    public function getName()
    {
        return 'MEGA XL GPS';
    }
}
