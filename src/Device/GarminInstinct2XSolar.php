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

class GarminInstinct2XSolar extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_INSTINCT_2_X_SOLAR;
    }

    public function getName(): string
    {
        return 'Instinct 2X Solar';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
