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

class GarminVivoActive3Music extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_VIVO_ACTIVE_3_MUSIC;
    }

    public function getName()
    {
        return 'vívoactive 3 Music';
    }

    public function hasBarometer()
    {
        return true;
    }
}
