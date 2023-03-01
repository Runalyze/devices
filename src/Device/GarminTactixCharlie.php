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

class GarminTactixCharlie extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_TACTIX_CHARLIE;
    }

    public function getName(): string
    {
        return 'Tactix Charlie';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
