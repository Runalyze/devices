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

class Huami extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::HUAMI;
    }

    public function getName(): string
    {
        return 'Huami';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::HUAMI_UNKNOWN,
            DeviceProfile::HUAMI_AMAZFIT_BIP,
            DeviceProfile::HUAMI_AMAZFIT_BIP_LITE,
            DeviceProfile::HUAMI_AMAZFIT_G_T_R,
            DeviceProfile::HUAMI_AMAZFIT_G_T_S,
            DeviceProfile::HUAMI_AMAZFIT_NEXO,
            DeviceProfile::HUAMI_AMAZFIT_VERGE_LITE,
            DeviceProfile::HUAMI_AMAZFIT_PACE,
            DeviceProfile::HUAMI_AMAZFIT_STRATOS,
            DeviceProfile::HUAMI_AMAZFIT_STRATOS_PLUS,
            DeviceProfile::HUAMI_AMAZFIT_STRATOS_3,
            DeviceProfile::HUAMI_AMAZFIT_VERGE,
            DeviceProfile::HUAMI_AMAZFIT_G_T_R_3_PRO,
            DeviceProfile::HUAMI_AMAZFIT_G_T_S_3,
            DeviceProfile::HUAMI_AMAZFIT_G_T_R_3,
            DeviceProfile::HUAMI_AMAZFIT_BIP_U,
            DeviceProfile::HUAMI_AMAZFIT_T_REX,
            DeviceProfile::HUAMI_AMAZFIT_BIP_U_PRO,
            DeviceProfile::HUAMI_AMAZFIT_G_T_R_2,
            DeviceProfile::HUAMI_AMAZFIT_G_T_S_2,
            DeviceProfile::HUAMI_AMAZFIT_G_T_S_2_MINI,
            DeviceProfile::HUAMI_AMAZFIT_T_REX_PRO,
            DeviceProfile::HUAMI_AMAZFIT_STRATOS_2,
            DeviceProfile::HUAMI_AMAZFIT_ACTIVE_2,
        ];
    }
}
