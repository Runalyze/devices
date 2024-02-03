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

class GarminFenix6SProDualPower extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_FENIX_6_S_PRO_DUAL_POWER;
    }

    public function getName(): string
    {
        return 'Fenix 6S PRO Dual Power';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
