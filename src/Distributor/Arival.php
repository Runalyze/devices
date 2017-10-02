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

class Arival extends AbstractDistributor
{
    public function getEnum()
    {
        return DistributorProfile::ARIVAL;
    }

    public function getName()
    {
        return 'a-rival';
    }

    public function getDeviceEnumList()
    {
        return [];
    }
}
