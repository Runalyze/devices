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

class Igpsport extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::IGPSPORT;
    }

    public function getName(): string
    {
        return 'iGPSPORT';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::IGPSPORT_IGS_20_E,
            DeviceProfile::IGPSPORT_IGS_50_E,
            DeviceProfile::IGPSPORT_IGS_130,
            DeviceProfile::IGPSPORT_IGS_618,
            DeviceProfile::IGPSPORT_IGS_620,
            DeviceProfile::IGPSPORT_UNKNOWN,
        ];
    }
}
