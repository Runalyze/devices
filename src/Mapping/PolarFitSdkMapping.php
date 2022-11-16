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

class PolarFitSdkMapping
{
    /** @var int[]|string[] */
    protected $Mapping = [];

    protected function getMapping()
    {
        return [
            13 => DeviceProfile::POLAR_V_800,
            19 => DeviceProfile::POLAR_V_650,
            22 => DeviceProfile::POLAR_M_400,
            85 => DeviceProfile::POLAR_A_300,
            91 => DeviceProfile::POLAR_PACER_PRO,
            106 => DeviceProfile::POLAR_M_450,
            110 => DeviceProfile::POLAR_A_360,
            122 => DeviceProfile::POLAR_M_600,
            123 => DeviceProfile::POLAR_M_200,
            133 => DeviceProfile::POLAR_H_10,
            151 => DeviceProfile::POLAR_O_H_1,
            163 => DeviceProfile::POLAR_M_430,
            166 => DeviceProfile::POLAR_A_370,
            172 => DeviceProfile::POLAR_M_460,
            203 => DeviceProfile::POLAR_VANTAGE_V,
            209 => DeviceProfile::POLAR_VANTAGE_M,
            216 => DeviceProfile::POLAR_IGNITE,
            217 => DeviceProfile::POLAR_GRIT_X,
            225 => DeviceProfile::POLAR_UNITE,
            230 => DeviceProfile::POLAR_VANTAGE_V_2,
            235 => DeviceProfile::POLAR_VERITY_SENSE,
            236 => DeviceProfile::POLAR_VANTAGE_M_2,
            241 => DeviceProfile::POLAR_IGNITE_2,
            251 => DeviceProfile::POLAR_GRIT_X_PRO,
            256 => DeviceProfile::POLAR_PACER,
            261 => DeviceProfile::POLAR_PACER_PRO,
            262 => DeviceProfile::POLAR_IGNITE_3
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
