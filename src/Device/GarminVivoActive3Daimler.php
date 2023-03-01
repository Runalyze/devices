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

class GarminVivoActive3Daimler extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_VIVO_ACTIVE_3_DAIMLER;
    }

    public function getName(): string
    {
        return 'vívoactive 3 Daimler';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
