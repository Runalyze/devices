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

class Wattbike extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::WATTBIKE;
    }

    public function getName(): string
    {
        return 'Wattbike';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::WATTBIKE_UNKNOWN,
            DeviceProfile::WATTBIKE_ATOM,
            DeviceProfile::WATTBIKE_ATOM_X,
            DeviceProfile::WATTBIKE_ICON,
        ];
    }
}
