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

class LezyneMacroGps extends AbstractDevice
{
    use LezyneDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::LEZYNE_MACRO_GPS;
    }

    public function getName(): string
    {
        return 'MARCO GPS';
    }
}
