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

class TomTom extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::TOM_TOM;
    }

    public function getName(): string
    {
        return 'TomTom';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::TOM_TOM_UNKNOWN,
        ];
    }
}
