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

class Coros extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::COROS;
    }

    public function getName(): string
    {
        return 'Coros';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::COROS_APEX,
            DeviceProfile::COROS_APEX_PRO,
            DeviceProfile::COROS_APEX_2,
            DeviceProfile::COROS_APEX_2_PRO,
            DeviceProfile::COROS_APEX_42,
            DeviceProfile::COROS_APEX_46,
            DeviceProfile::COROS_PACE,
            DeviceProfile::COROS_PACE_2,
            DeviceProfile::COROS_VERTIX,
            DeviceProfile::COROS_VERTIX_2,
            DeviceProfile::COROS_UNKNOWN,
        ];
    }
}
