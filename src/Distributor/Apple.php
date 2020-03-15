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

class Apple extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::APPLE;
    }

    public function getName()
    {
        return 'Apple';
    }

    public function getDeviceEnumList()
    {
        return [
            DeviceProfile::APPLE_WATCH,
            DeviceProfile::APPLE_WATCH_1_V_38,
            DeviceProfile::APPLE_WATCH_1_V_42,
            DeviceProfile::APPLE_WATCH_2_V_38,
            DeviceProfile::APPLE_WATCH_2_V_42,
            DeviceProfile::APPLE_WATCH_3_V_38,
            DeviceProfile::APPLE_WATCH_3_V_42,
            DeviceProfile::APPLE_WATCH_3_V_38_CELLULAR,
            DeviceProfile::APPLE_WATCH_3_V_42_CELLULAR,
            DeviceProfile::APPLE_WATCH_4_V_40,
            DeviceProfile::APPLE_WATCH_4_V_44,
            DeviceProfile::APPLE_WATCH_4_V_40_CELLULAR,
            DeviceProfile::APPLE_WATCH_4_V_44_CELLULAR,
            DeviceProfile::APPLE_WATCH_5_V_40,
            DeviceProfile::APPLE_WATCH_5_V_44,
            DeviceProfile::APPLE_WATCH_5_V_40_CELLULAR,
            DeviceProfile::APPLE_WATCH_5_V_44_CELLULAR,
        ];
    }
}
