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

class GarminTactix8Amoled51 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_TACTIX_8_AMOLED_51;
    }

    public function getName(): string
    {
        return 'Tactix 8 Amoled (51mm)';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
