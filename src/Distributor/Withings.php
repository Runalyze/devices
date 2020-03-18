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

class Withings extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::WITHINGS;
    }

    public function getName()
    {
        return 'Withings';
    }

    public function getDeviceEnumList()
    {
        return [];
    }
}
