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

class CorosApexPro extends AbstractDevice
{
    use CorosDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::COROS_APEX_PRO;
    }

    public function getName(): string
    {
        return 'ApexPro';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
