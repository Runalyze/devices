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

class FitbitChargeHR extends AbstractDevice
{
    use FitbitDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::FITBIT_CHARGE_H_R;
    }

    public function getName(): string
    {
        return 'Charge HR';
    }
}
