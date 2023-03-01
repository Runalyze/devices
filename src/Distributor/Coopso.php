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

class Coopso extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::COOPSO;
    }

    public function getName(): string
    {
        return 'Coopso';
    }

    public function getDeviceEnumList(): array
    {
        return [
        ];
    }
}
