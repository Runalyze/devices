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

class CorosPacePro extends AbstractDevice
{
    use CorosDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::COROS_PACE_PRO;
    }

    public function getName(): string
    {
        return 'Pace Pro';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
