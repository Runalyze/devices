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

class Wahoo extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::WAHOO;
    }

    public function getName()
    {
        return 'Wahoo';
    }

    public function getDeviceEnumList()
    {
        return [];
    }
}
