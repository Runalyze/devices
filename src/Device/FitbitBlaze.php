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

class FitbitBlaze extends AbstractDevice
{
    use FitbitDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::FITBIT_BLAZE;
    }

    public function getName(): string
    {
        return 'Blaze';
    }
}
