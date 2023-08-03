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

class Suunto extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::SUUNTO;
    }

    public function getName(): string
    {
        return 'Suunto';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::SUUNTO_UNKNOWN,
            DeviceProfile::SUUNTO_3_FITNESS,
            DeviceProfile::SUUNTO_M_4,
            DeviceProfile::SUUNTO_M_5,
            DeviceProfile::SUUNTO_X_6,
            DeviceProfile::SUUNTO_X_9,
            DeviceProfile::SUUNTO_X_10,
            DeviceProfile::SUUNTO_D_4_I,
            DeviceProfile::SUUNTO_D_5,
            DeviceProfile::SUUNTO_D_6_I.
            DeviceProfile::SUUNTO_5,
            DeviceProfile::SUUNTO_5_PEAK,
            DeviceProfile::SUUNTO_7,
            DeviceProfile::SUUNTO_9,
            DeviceProfile::SUUNTO_9_BARO,
            DeviceProfile::SUUNTO_9_PEAK,
            DeviceProfile::SUUNTO_9_PEAK_PRO,
            DeviceProfile::SUUNTO_T_6_C,
            DeviceProfile::SUUNTO_T_6_D,
            DeviceProfile::SUUNTO_T_6,
            DeviceProfile::SUUNTO_T_4,
            DeviceProfile::SUUNTO_T_4_C,
            DeviceProfile::SUUNTO_T_4_D,
            DeviceProfile::SUUNTO_T_3,
            DeviceProfile::SUUNTO_T_3_C,
            DeviceProfile::SUUNTO_T_3_D,
            DeviceProfile::SUUNTO_D_6_I,
            DeviceProfile::SUUNTO_D_4_F,
            DeviceProfile::SUUNTO_AMBIT,
            DeviceProfile::SUUNTO_AMBIT_2,
            DeviceProfile::SUUNTO_AMBIT_2_R,
            DeviceProfile::SUUNTO_AMBIT_2_S,
            DeviceProfile::SUUNTO_AMBIT_3_PEAK,
            DeviceProfile::SUUNTO_AMBIT_3_RUN,
            DeviceProfile::SUUNTO_AMBIT_3_VERTICAL,
            DeviceProfile::SUUNTO_AMBIT_3_SPORT,
            DeviceProfile::SUUNTO_EON_CORE,
            DeviceProfile::SUUNTO_EON_STEEL,
            DeviceProfile::SUUNTO_MEMORY_BELT,
            DeviceProfile::SUUNTO_QUEST,
            DeviceProfile::SUUNTO_TRAVERSE,
            DeviceProfile::SUUNTO_TRAVERSE_ALPHA,
            DeviceProfile::SUUNTO_SPARTAN_TRAINER_WRIST_H_R,
            DeviceProfile::SUUNTO_SPARTAN_ULTRA,
            DeviceProfile::SUUNTO_SPARTAN_SPORT,
            DeviceProfile::SUUNTO_SPARTAN_SPORT_WRIST_H_R,
            DeviceProfile::SUUNTO_SPARTAN_SPORT_WRIST_H_R_BARO,
            DeviceProfile::SUUNTO_SMART_BELT,
            DeviceProfile::SUUNTO_ZOOP_NOVO,
            DeviceProfile::SUUNTO_VYPER_NOVO,
            DeviceProfile::SUUNTO_VERTICAL,
        ];
    }
}
