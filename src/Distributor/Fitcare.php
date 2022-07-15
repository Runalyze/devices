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

class Fitcare extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::FITCARE;
    }

    public function getName()
    {
        return 'Fitcare';
    }

    public function getDeviceEnumList()
    {
        return [
            DeviceProfile::FITCARE_B_C_200,
        ];
    }
}
