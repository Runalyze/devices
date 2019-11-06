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

class Amazfit extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::AMAZFIT;
    }

    public function getName()
    {
        return 'Amazfit';
    }

    public function getDeviceEnumList()
    {
        return [];
    }
}
