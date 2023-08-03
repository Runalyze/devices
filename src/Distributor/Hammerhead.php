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

class Hammerhead extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::HAMMERHEAD;
    }

    public function getName(): string
    {
        return 'Hammerhead';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::HAMMERHEAD_KAROO,
            DeviceProfile::HAMMERHEAD_KAROO_2,
        ];
    }
}
