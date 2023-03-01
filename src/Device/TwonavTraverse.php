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

class TwonavTraverse extends AbstractDevice
{
    use TwonavDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::TWONAV_TRAVERSE;
    }

    public function getName(): string
    {
        return 'Traverse';
    }
}
