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

class Sigma extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::SIGMA;
    }

    public function getName()
    {
        return 'Sigma';
    }

    public function getDeviceEnumList()
    {
        return [
            DeviceProfile::SIGMA_SPORT_ACTIVO,
            DeviceProfile::SIGMA_SPORT_ID_LIFE,
            DeviceProfile::SIGMA_SPORT_ID_RUN_H_R,
            DeviceProfile::SIGMA_SPORT_ID_TRI,
            DeviceProfile::SIGMA_SPORT_ONYX_EASY,
            DeviceProfile::SIGMA_SPORT_ONYX_FIT,
            DeviceProfile::SIGMA_SPORT_ONYX_PRO,
            DeviceProfile::SIGMA_SPORT_PC_3,
            DeviceProfile::SIGMA_SPORT_PC_9,
            DeviceProfile::SIGMA_SPORT_PC_15,
            DeviceProfile::SIGMA_SPORT_PC_311,
            DeviceProfile::SIGMA_SPORT_PC_2213,
            DeviceProfile::SIGMA_SPORT_PC_2510,
            DeviceProfile::SIGMA_SPORT_PC_2614,
            DeviceProfile::SIGMA_SPORT_RC_1209,
            DeviceProfile::SIGMA_SPORT_RC_1411,
            DeviceProfile::SIGMA_SPORT_RC_MOVE,
            DeviceProfile::SIGMA_UNKNOWN,
    ];
    }
}
