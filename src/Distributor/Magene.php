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

class Magene extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::MAGENE;
    }

    public function getName(): string
    {
        return 'Magene';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::MAGENE_UNKNOWN,
            DeviceProfile::MAGENE_C_406,
            DeviceProfile::MAGENE_C_406_PRO,
            DeviceProfile::MAGENE_C_206_PRO,
        ];
    }
}
