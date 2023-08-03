<?php

/*
 * This file is part of the Runalyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Runalyze\Devices\Distributor;

use Runalyze\Devices\Device\DeviceProfile;

class Timex extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::TIMEX;
    }

    public function getName(): string
    {
        return 'Timex';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::TIMEX_UNKNOWN,
            DeviceProfile::TIMEX_IRONMAN_GPS,
        ];
    }
}
