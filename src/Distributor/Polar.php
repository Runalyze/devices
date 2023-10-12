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

class Polar extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::POLAR;
    }

    public function getName(): string
    {
        return 'Polar';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::APP_POLAR_FLOW,
            DeviceProfile::APP_POLAR_PERSONAL_TRAINER,
            DeviceProfile::POLAR_UNKNOWN,
            DeviceProfile::POLAR_IGNITE,
            DeviceProfile::POLAR_IGNITE_2,
            DeviceProfile::POLAR_A_300,
            DeviceProfile::POLAR_A_360,
            DeviceProfile::POLAR_A_730,
            DeviceProfile::POLAR_LOOP,
            DeviceProfile::POLAR_LOOP_2,
            DeviceProfile::POLAR_M_200,
            DeviceProfile::POLAR_M_400,
            DeviceProfile::POLAR_M_430,
            DeviceProfile::POLAR_M_450,
            DeviceProfile::POLAR_M_460,
            DeviceProfile::POLAR_M_600,
            DeviceProfile::POLAR_R_S_300_X,
            DeviceProfile::POLAR_R_S_800_C_X,
            DeviceProfile::POLAR_V_650,
            DeviceProfile::POLAR_V_800,
            DeviceProfile::POLAR_VANTAGE_M,
            DeviceProfile::POLAR_VANTAGE_M_2,
            DeviceProfile::POLAR_VANTAGE_V,
            DeviceProfile::POLAR_VANTAGE_V_TITAN,
            DeviceProfile::POLAR_GRIT_X,
            DeviceProfile::POLAR_A_370,
            DeviceProfile::POLAR_O_H_1,
            DeviceProfile::POLAR_VANTAGE_V_2,
            DeviceProfile::POLAR_VANTAGE_V_3,
            DeviceProfile::POLAR_UNITE,
            DeviceProfile::POLAR_VERITY_SENSE,
            DeviceProfile::POLAR_GRIT_X_PRO,
            DeviceProfile::POLAR_PACER,
            DeviceProfile::POLAR_PACER_PRO,
            DeviceProfile::POLAR_IGNITE_3,
            DeviceProfile::POLAR_H_10,
            DeviceProfile::POLAR_H_9,
        ];
    }
}
