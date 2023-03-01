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

class SigmaSportOnyxPro extends AbstractDevice
{
    use SigmaDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::SIGMA_SPORT_ONYX_PRO;
    }

    public function getName(): string
    {
        return 'Sport Onyx Pro';
    }
}
