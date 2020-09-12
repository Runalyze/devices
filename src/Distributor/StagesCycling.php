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

class StagesCycling extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::STAGES_CYCLING;
    }

    public function getName()
    {
        return 'Stages Cycling';
    }

    public function getDeviceEnumList()
    {
        return [
            DeviceProfile::STAGES_CYCLING_UNKNOWN
        ];
    }
}
