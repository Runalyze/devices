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

class GarminTactix7Amoled extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_TACTIX_7_AMOLED;
    }

    public function getName(): string
    {
        return 'Tactix 7 Amoled';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
