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

class AppleWatch9V45Cellular extends AbstractDevice
{
    use AppleDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::APPLE_WATCH_9_V_45_CELLULAR;
    }

    public function getName(): string
    {
        return 'Watch 9 (45mm) (Cellular)';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
