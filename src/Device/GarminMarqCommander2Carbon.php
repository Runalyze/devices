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

class GarminMarqCommander2Carbon extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_MARQ_COMMANDER_2_CARBON;
    }

    public function getName(): string
    {
        return 'MARQ Commander (Gen 2) Carbon';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
