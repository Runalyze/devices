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

class FitcareBC200 extends AbstractDevice
{
    use FitcareDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::FITCARE_B_C_200;
    }

    public function getName(): string
    {
        return 'BC200';
    }

    public function hasBarometer(): bool
    {
        //Not sure
        return false;
    }
}
