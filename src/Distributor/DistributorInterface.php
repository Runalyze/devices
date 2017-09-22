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

interface DistributorInterface
{
    /**
     * @return int
     */
    public function getEnum();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return int[]
     */
    public function getDeviceEnumList();
}
