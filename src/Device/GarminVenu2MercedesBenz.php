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

class GarminVenu2MercedesBenz extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_VENU_2_MERCEDES_BENZ;
    }

    public function getName(): string
    {
        return 'Venu 2 Mercedes-Benz';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
