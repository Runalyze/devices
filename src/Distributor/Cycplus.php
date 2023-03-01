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

class Cycplus extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::CYCPLUS;
    }

    public function getName(): string
    {
        return 'Cycplus';
    }

    public function getDeviceEnumList(): array
    {
        return [
        ];
    }
}
