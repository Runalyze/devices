<?php

/*
 * This file is part of the Runalyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Runalyze\Devices\Mapping;

use Runalyze\Devices\Device\DeviceProfile;

class DevelopmentFitSdkMapping
{
    /** @var int[]|string[] */
    protected $Mapping = [];

    protected function getMapping()
    {
        return [
            'Watch1,1' => DeviceProfile::APPLE_WATCH_V_38,
            'Watch1,2' => DeviceProfile::APPLE_WATCH_V_42,
            'Watch2,6' => DeviceProfile::APPLE_WATCH_1_V_38,
            'Watch2,7' => DeviceProfile::APPLE_WATCH_1_V_42,
            'Watch2,3' => DeviceProfile::APPLE_WATCH_2_V_38,
            'Watch2,4' => DeviceProfile::APPLE_WATCH_2_V_42,
            'Watch3,1' => DeviceProfile::APPLE_WATCH_3_V_38_CELLULAR,
            'Watch3,2' => DeviceProfile::APPLE_WATCH_3_V_42_CELLULAR,
            'Watch3,3' => DeviceProfile::APPLE_WATCH_3_V_38,
            'Watch3,4' => DeviceProfile::APPLE_WATCH_3_V_42,
            'Watch4,1' => DeviceProfile::APPLE_WATCH_4_V_40,
            'Watch4,2' => DeviceProfile::APPLE_WATCH_4_V_44,
            'Watch4,3' => DeviceProfile::APPLE_WATCH_4_V_40_CELLULAR,
            'Watch4,4' => DeviceProfile::APPLE_WATCH_4_V_44_CELLULAR,
            'Watch5,1' => DeviceProfile::APPLE_WATCH_5_V_40,
            'Watch5,2' => DeviceProfile::APPLE_WATCH_5_V_44,
            'Watch5,3' => DeviceProfile::APPLE_WATCH_5_V_40_CELLULAR,
            'Watch5,4' => DeviceProfile::APPLE_WATCH_5_V_44_CELLULAR,
            'iPhone7,1' => DeviceProfile::APPLE_IPHONE_6_PLUS,
            'iPhone7,2' => DeviceProfile::APPLE_IPHONE_6,
            'iPhone8,1' => DeviceProfile::APPLE_IPHONE_6_S,
            'iPhone8,2' => DeviceProfile::APPLE_IPHONE_6_S_PLUS,
            'iPhone8,4' => DeviceProfile::APPLE_IPHONE_S_E,
            'iPhone9,1' => DeviceProfile::APPLE_IPHONE_7,
            'iPhone9,2' => DeviceProfile::APPLE_IPHONE_7_PLUS,
            'iPhone9,3' => DeviceProfile::APPLE_IPHONE_7,
            'iPhone9,4' => DeviceProfile::APPLE_IPHONE_7_PLUS,
            'iPhone10,1' => DeviceProfile::APPLE_IPHONE_8,
            'iPhone10,2' => DeviceProfile::APPLE_IPHONE_8_PLUS,
            'iPhone10,3' => DeviceProfile::APPLE_IPHONE_X_GLOBAL,
            'iPhone10,4' => DeviceProfile::APPLE_IPHONE_8,
            'iPhone10,5' => DeviceProfile::APPLE_IPHONE_8_PLUS,
            'iPhone10,6' => DeviceProfile::APPLE_IPHONE_X_G_S_M,
            'iPhone11,2' => DeviceProfile::APPLE_IPHONE_X_S,
            'iPhone11,4' => DeviceProfile::APPLE_IPHONE_X_S_MAX,
            'iPhone11,6' => DeviceProfile::APPLE_IPHONE_X_S_MAX_GLOBAL,
            'iPhone11,8' => DeviceProfile::APPLE_IPHONE_X_R,
            'iPhone12,1' => DeviceProfile::APPLE_IPHONE_11,
            'iPhone12,3' => DeviceProfile::APPLE_IPHONE_11_PRO,
            'iPhone12,5' => DeviceProfile::APPLE_IPHONE_11_PRO_MAX,
            'iPhone12,8' => DeviceProfile::APPLE_IPHONE_S_E_2,
            'Polar A370' => DeviceProfile::POLAR_A_370,
            'Polar M400' => DeviceProfile::POLAR_M_400,
            'Polar M430' => DeviceProfile::POLAR_M_430,
            'Polar M450' => DeviceProfile::POLAR_M_450,
            'Polar M460' => DeviceProfile::POLAR_M_460,
            'Polar M600' => DeviceProfile::POLAR_M_600,
            'Polar V800' => DeviceProfile::POLAR_V_800,
            'Polar Vantage V' => DeviceProfile::POLAR_VANTAGE_V,
            'Polar Vantage V Titan' => DeviceProfile::POLAR_VANTAGE_V_TITAN,
            'Polar Vantage M' => DeviceProfile::POLAR_VANTAGE_M,
            'Polar OH1' => DeviceProfile::POLAR_O_H_1,
            'Polar Ignite' => DeviceProfile::POLAR_IGNITE,
            'Polar Grit X' => DeviceProfile::POLAR_GRIT_X,
            'Runkeeper' => DeviceProfile::APP_RUNKEEPER,
            'Nike Run Club' => DeviceProfile::APP_NIKE_RUN_CLUB
        ];
    }

    public function __construct()
    {
        $this->Mapping = $this->getMapping();
    }

    /**
     * @param  int|string $value
     * @return int|string
     */
    public function toInternal($value)
    {
        if (isset($this->Mapping[$value])) {
            return $this->Mapping[$value];
        }

        return;
    }
}
