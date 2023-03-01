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

class CycplusM2 extends AbstractDevice
{
    use BrytonDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::CYCPLUS_M2;
    }

    public function getName(): string
    {
        return 'M2';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
