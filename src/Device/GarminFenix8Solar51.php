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

class GarminFenix8Solar51 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_FENIX_8_SOLAR_51;
    }

    public function getName(): string
    {
        return 'Fenix 8 Solar/Sapphire (51mm)';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
