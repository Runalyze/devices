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

class SigmaSportRox120Sport extends AbstractDevice
{
    use SigmaDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::SIGMA_SPORT_ROX_120_SPORT;
    }

    public function getName(): string
    {
        return 'ROX 12.0 Sport';
    }
}
