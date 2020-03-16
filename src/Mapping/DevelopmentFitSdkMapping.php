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
            'Polar A370' => DeviceProfile::POLAR_A_370,
            'Polar M400' => DeviceProfile::POLAR_M_400,
            'Polar M430' => DeviceProfile::POLAR_M_430,
            'Polar M450' => DeviceProfile::POLAR_M_450,
            'Polar M460' => DeviceProfile::POLAR_M_460,
            'Polar M600' => DeviceProfile::POLAR_M_600,
            'Polar Vantage V' => DeviceProfile::POLAR_VANTAGE_V,
            'Polar Vantage M' => DeviceProfile::POLAR_VANTAGE_M,
            'Polar Ignite' => DeviceProfile::POLAR_IGNITE,
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
