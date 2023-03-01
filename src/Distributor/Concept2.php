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

class Concept2 extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::CONCEPT_2;
    }

    public function getName(): string
    {
        return 'Concept 2';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::CONCEPT_2_UNKNOWN,
            ];
    }
}
