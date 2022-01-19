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

class GarminDescentMk2S extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_DESCENT_MK_2_S;
    }

    public function getName()
    {
        return 'Descent Mk2S';
    }

    public function hasBarometer()
    {
        return true;
    }
}
