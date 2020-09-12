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
    public function getEnum()
    {
        return DistributorProfile::CONCEPT_2;
    }

    public function getName()
    {
        return 'Concept 2';
    }

    public function getDeviceEnumList()
    {
        return [
            DeviceProfile::CONCEPT_2_UNKNOWN
            ];
    }
}
