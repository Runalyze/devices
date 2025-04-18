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

class GarminFenix7ProSolarNoWifi extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_FENIX_7_PRO_SOLAR_NO_WIFI;
    }

    public function getName(): string
    {
        return 'Fenix 7 Pro Solar (No Wifi)';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
