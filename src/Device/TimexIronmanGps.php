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

class TimexIronmanGps extends AbstractDevice
{
    use TimexDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::TIMEX_IRONMAN_GPS;
    }

    public function getName(): string
    {
        return 'Ironman GPS';
    }
}
