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

class SuuntoFitSdkMapping
{
    /** @var int[]|string[] */
    protected $Mapping = [];

    protected function getMapping()
    {
        return [
            1 => DeviceProfile::SUUNTO_X_9,
            2 => DeviceProfile::SUUNTO_X_10,
            3 => DeviceProfile::SUUNTO_X_6,
            4 => DeviceProfile::SUUNTO_MEMORY_BELT,
            5 => DeviceProfile::SUUNTO_SMART_BELT,
            6 => DeviceProfile::SUUNTO_T_6,
            7 => DeviceProfile::SUUNTO_T_6_C,
            8 => DeviceProfile::SUUNTO_T_6_D,
            9 => DeviceProfile::SUUNTO_T_4,
            10 => DeviceProfile::SUUNTO_T_4_C,
            11 => DeviceProfile::SUUNTO_T_4_D,
            12 => DeviceProfile::SUUNTO_T_3,
            13 => DeviceProfile::SUUNTO_T_3_C,
            14 => DeviceProfile::SUUNTO_T_3_D,
            15 => DeviceProfile::SUUNTO_M_4,
            16 => DeviceProfile::SUUNTO_M_5,
            17 => DeviceProfile::SUUNTO_QUEST,
            18 => DeviceProfile::SUUNTO_AMBIT,
            19 => DeviceProfile::SUUNTO_AMBIT_2,
            20 => DeviceProfile::SUUNTO_AMBIT_2_S,
            21 => DeviceProfile::SUUNTO_AMBIT_2_R,
            22 => DeviceProfile::SUUNTO_AMBIT_3_PEAK,
            23 => DeviceProfile::SUUNTO_AMBIT_3_SPORT,
            24 => DeviceProfile::SUUNTO_AMBIT_3_RUN,
            25 => DeviceProfile::SUUNTO_AMBIT_3_VERTICAL,
            26 => DeviceProfile::SUUNTO_TRAVERSE,
            27 => DeviceProfile::SUUNTO_TRAVERSE_ALPHA,
            28 => DeviceProfile::SUUNTO_SPARTAN_SPORT,
            29 => DeviceProfile::SUUNTO_SPARTAN_ULTRA,
            30 => DeviceProfile::SUUNTO_SPARTAN_SPORT_WRIST_HR,
            31 => DeviceProfile::SUUNTO_SPARTAN_TRAINER_WRIST_HR,
            32 => DeviceProfile::SUUNTO_SPARTAN_SPORT_WRIST_HR_BARO,
            33 => DeviceProfile::SUUNTO_3_FITNESS,
            34 => DeviceProfile::SUUNTO_9_BARO,
            35 => DeviceProfile::SUUNTO_9,
            36 => DeviceProfile::SUUNTO_5,
            37 => DeviceProfile::SUUNTO_EON_CORE,
            38 => DeviceProfile::SUUNTO_EON_STEEL,
            39 => DeviceProfile::SUUNTO_D_5
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
