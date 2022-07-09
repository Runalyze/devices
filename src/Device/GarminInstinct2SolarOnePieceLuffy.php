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

class GarminInstinct2SolarOnePieceLuffy extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_INSTINCT_2_SOLAR_ONE_PIECE_LUFFY;
    }

    public function getName()
    {
        return 'Instinct Solar';
    }

    public function hasBarometer()
    {
        return true;
    }
}
