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

class PolarM200 extends AbstractDevice
{
    use PolarDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::POLAR_M_200;
    }

    public function getName(): string
    {
        return 'M200';
    }
}
