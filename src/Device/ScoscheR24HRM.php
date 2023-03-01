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

class ScoscheR24HRM extends AbstractDevice
{
    use ScoscheDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::SCOSCHE_R_24_H_R_M;
    }

    public function getName(): string
    {
        return 'R24HRM';
    }
}
