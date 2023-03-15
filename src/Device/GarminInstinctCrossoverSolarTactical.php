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

class GarminInstinctCrossoverSolarTactical extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_INSTINCT_CROSSOVER_SOLAR_TACTICAL;
    }

    public function getName(): string
    {
        return 'Instinct Crossover Solar Tactical';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
