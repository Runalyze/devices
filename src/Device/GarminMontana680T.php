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

class GarminMontana680T extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_MONTANA_680_T;
    }

    public function getName(): string
    {
        return 'Montana 680t';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
