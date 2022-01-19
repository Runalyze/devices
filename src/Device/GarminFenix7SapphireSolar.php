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

class GarminFenix7SapphireSolar extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FENIX_7_SAPPHIRE_SOLAR;
    }

    public function getName()
    {
        return 'Fenix 7 (Sapphire Solar)';
    }

    public function hasBarometer()
    {
        return true;
    }
}
