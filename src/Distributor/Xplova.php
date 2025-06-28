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

class Xplova extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::XPLOVA;
    }

    public function getName(): string
    {
        return 'Xplova';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::XPLOVA_X_5_EVO,
            DeviceProfile::XPLOVA_NOZA_S,
        ];
    }
}
