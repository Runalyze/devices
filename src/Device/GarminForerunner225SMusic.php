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

class GarminForerunner225SMusic extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_FORERUNNER_225_S_MUSIC;
    }

    public function getName(): string
    {
        return 'Forerunner 225S Music';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
