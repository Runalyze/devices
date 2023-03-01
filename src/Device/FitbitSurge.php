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

class FitbitSurge extends AbstractDevice
{
    use FitbitDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::FITBIT_SURGE;
    }

    public function getName(): string
    {
        return 'Surge';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
