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

class Lezyne extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::LEZYNE;
    }

    public function getName(): string
    {
        return 'Lezyne';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::LEZYNE_MACRO_EASY_GPS,
            DeviceProfile::LEZYNE_MACRO_PLUS_GPS,
            DeviceProfile::LEZYNE_MEGA_C_GPS,
            DeviceProfile::LEZYNE_MEGA_XL_GPS,
            DeviceProfile::LEZYNE_MINI_GPS,
            DeviceProfile::LEZYNE_SUPER_PRO_GPS,
            DeviceProfile::LEZYNE_COLOR_GPS,
            DeviceProfile::LEZYNE_UNKNOWN,
        ];
    }
}
