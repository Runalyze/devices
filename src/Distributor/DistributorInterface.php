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

interface DistributorInterface extends \JsonSerializable
{
    public function getEnum(): int;

    public function getName(): string;

    /**
     * @return int[]
     */
    public function getDeviceEnumList(): array;
}
