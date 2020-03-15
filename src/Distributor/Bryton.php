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

class Bryton extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::BRYTON;
    }

    public function getName()
    {
        return 'Bryton';
    }

    public function getDeviceEnumList()
    {
        return [
            DeviceProfile::BRYTON_UNKNOWN,
            DeviceProfile::BRYTON_RIDER_10,
            DeviceProfile::BRYTON_RIDER_15,
            DeviceProfile::BRYTON_RIDER_310,
            DeviceProfile::BRYTON_RIDER_330,
            DeviceProfile::BRYTON_RIDER_410,
            DeviceProfile::BRYTON_RIDER_420,
            DeviceProfile::BRYTON_RIDER_450,
            DeviceProfile::BRYTON_RIDER_530,
            DeviceProfile::BRYTON_RIDER_860,
            DeviceProfile::BRYTON_RIDER_ONE,
        ];
    }
}
