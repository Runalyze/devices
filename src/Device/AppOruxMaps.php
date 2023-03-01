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

class AppOruxMaps extends AbstractDevice
{
    use AppDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::APP_ORUX_MAPS;
    }

    public function getName(): string
    {
        return 'OruxMaps';
    }
}
