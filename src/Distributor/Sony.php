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

class Sony extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::SONY;
    }

    public function getName(): string
    {
        return 'Sony';
    }

    public function getDeviceEnumList(): array
    {
        return [];
    }
}
