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

class AppleWatchSE44Cellular extends AbstractDevice
{
    use AppleDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::APPLE_WATCH_S_E_44_CELLULAR;
    }

    public function getName()
    {
        return 'Watch SE (40mm) (Cellular) (1G)';
    }
}
