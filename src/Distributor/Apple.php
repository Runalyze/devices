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
    public function getEnum(): int
    {
        return DistributorProfile::APPLE;
    }

    public function getName(): string
    {
        return 'Apple';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::APPLE_UNKNOWN,
            DeviceProfile::APPLE_WATCH,
            DeviceProfile::APPLE_WATCH_V_38,
            DeviceProfile::APPLE_WATCH_V_42,
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
            DeviceProfile::APPLE_WATCH_6_V_40,
            DeviceProfile::APPLE_WATCH_6_V_44,
            DeviceProfile::APPLE_WATCH_6_V_40_CELLULAR,
            DeviceProfile::APPLE_WATCH_6_V_44_CELLULAR,
            DeviceProfile::APPLE_WATCH_7_V_41,
            DeviceProfile::APPLE_WATCH_7_V_41_CELLULAR,
            DeviceProfile::APPLE_WATCH_7_V_45_CELLULAR,
            DeviceProfile::APPLE_WATCH_7_V_45,
            DeviceProfile::APPLE_WATCH_8_V_41,
            DeviceProfile::APPLE_WATCH_8_V_41_CELLULAR,
            DeviceProfile::APPLE_WATCH_8_V_45_CELLULAR,
            DeviceProfile::APPLE_WATCH_8_V_45,
            DeviceProfile::APPLE_WATCH_9_V_41,
            DeviceProfile::APPLE_WATCH_9_V_41_CELLULAR,
            DeviceProfile::APPLE_WATCH_9_V_45_CELLULAR,
            DeviceProfile::APPLE_WATCH_9_V_45,
            DeviceProfile::APPLE_WATCH_S_E_40,
            DeviceProfile::APPLE_WATCH_S_E_40_CELLULAR,
            DeviceProfile::APPLE_WATCH_S_E_44,
            DeviceProfile::APPLE_WATCH_S_E_44_CELLULAR,
            DeviceProfile::APPLE_WATCH_S_E_40_V_2,
            DeviceProfile::APPLE_WATCH_S_E_44_V_2,
            DeviceProfile::APPLE_WATCH_S_E_40_CELLULAR_V_2,
            DeviceProfile::APPLE_WATCH_S_E_44_CELLULAR_V_2,
            DeviceProfile::APPLE_WATCH_ULTRA,
            DeviceProfile::APPLE_WATCH_ULTRA_2,
            DeviceProfile::APPLE_IPHONE_X_S,
            DeviceProfile::APPLE_IPHONE_X_S_MAX_GLOBAL,
            DeviceProfile::APPLE_IPHONE_X_S_MAX,
            DeviceProfile::APPLE_IPHONE_X_R,
            DeviceProfile::APPLE_IPHONE_S_E_2,
            DeviceProfile::APPLE_IPHONE_S_E,
            DeviceProfile::APPLE_IPHONE_6,
            DeviceProfile::APPLE_IPHONE_6_S,
            DeviceProfile::APPLE_IPHONE_6_S_PLUS,
            DeviceProfile::APPLE_IPHONE_6_PLUS,
            DeviceProfile::APPLE_IPHONE_7,
            DeviceProfile::APPLE_IPHONE_7_PLUS,
            DeviceProfile::APPLE_IPHONE_8,
            DeviceProfile::APPLE_IPHONE_8_PLUS,
            DeviceProfile::APPLE_IPHONE_11,
            DeviceProfile::APPLE_IPHONE_11_PRO_MAX,
            DeviceProfile::APPLE_IPHONE_11_PRO,
            DeviceProfile::APPLE_IPHONE_12,
            DeviceProfile::APPLE_IPHONE_12_PRO,
            DeviceProfile::APPLE_IPHONE_12_PRO_MAX,
            DeviceProfile::APPLE_IPHONE_12_MINI,
            DeviceProfile::APPLE_IPHONE_X_GLOBAL,
            DeviceProfile::APPLE_IPHONE_X_G_S_M,
            DeviceProfile::APPLE_IPHONE_S_E_3,
            DeviceProfile::APPLE_IPHONE_13,
            DeviceProfile::APPLE_IPHONE_14,
            DeviceProfile::APPLE_IPHONE_13_PRO,
            DeviceProfile::APPLE_IPHONE_14_PRO,
            DeviceProfile::APPLE_IPHONE_13_PRO_MAX,
            DeviceProfile::APPLE_IPHONE_14_PRO_MAX,
            DeviceProfile::APPLE_IPHONE_13_MINI,
            DeviceProfile::APPLE_IPHONE_14_PLUS,
            DeviceProfile::APPLE_IPHONE_15,
            DeviceProfile::APPLE_IPHONE_15_PRO,
            DeviceProfile::APPLE_IPHONE_15_PLUS,
            DeviceProfile::APPLE_IPHONE_15_PRO_MAX,
            DeviceProfile::APPLE_IPHONE_16,
            DeviceProfile::APPLE_IPHONE_16_PRO,
            DeviceProfile::APPLE_IPHONE_16_PRO_MAX,
            DeviceProfile::APPLE_IPHONE_16_PLUS,
        ];
    }
}
