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

class Samsung extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::SAMSUNG;
    }

    public function getName(): string
    {
        return 'Samsung';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::SAMSUNG_GALAXY_WATCH_3,
            DeviceProfile::SAMSUNG_GALAXY_WATCH_4,
        ];
    }
}
