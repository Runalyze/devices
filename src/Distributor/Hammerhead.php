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

class Hammerhead extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::HAMMERHEAD;
    }

    public function getName()
    {
        return 'Hammerhead';
    }

    public function getDeviceEnumList()
    {
        return [];
    }
}
