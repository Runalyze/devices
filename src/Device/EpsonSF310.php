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

class EpsonSF310 extends AbstractDevice
{
    use EpsonDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::EPSON_S_F_310;
    }

    public function getName(): string
    {
        return 'SF-310';
    }
}
