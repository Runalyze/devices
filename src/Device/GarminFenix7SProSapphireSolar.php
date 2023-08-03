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

class GarminFenix7SProSapphireSolar extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_FENIX_7_S_PRO_SAPPHIRE_SOLAR;
    }

    public function getName(): string
    {
        return 'Fenix 7S Pro (Sapphire Solar)';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}