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

class Kiprun extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::KIPRUN;
    }

    public function getName(): string
    {
        return 'Kiprun';
    }

    public function getDeviceEnumList(): array
    {
        return [];
    }
}
