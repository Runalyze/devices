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

class Mio extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::MIO;
    }

    public function getName()
    {
        return 'Mio';
    }

    public function getDeviceEnumList()
    {
        return [
            DeviceProfile::MIO_UNKOWN,
        ];
    }
}
