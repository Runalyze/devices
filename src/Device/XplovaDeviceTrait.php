<?php

/*
 * This file is part of the Runalyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Runalyze\Devices\Device;

use Runalyze\Devices\Distributor\DistributorProfile;

trait XplovaDeviceTrait
{
    public function getDistributorEnum(): int
    {
        return DistributorProfile::XPLOVA;
    }
}
