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

use Runalyze\Common\Enum\AbstractEnum;
use Runalyze\Common\Enum\AbstractEnumFactoryTrait;

class DistributorProfile extends AbstractEnum
{
    use AbstractEnumFactoryTrait;

    /** @var int */
    const GARMIN = 1;

    /** @var int */
    const POLAR = 2;

    /** @var int */
    const SUUNTO = 3;

    /** @var int */
    const TOM_TOM = 4;

    /** @var int */
    const EPSON = 5;

    /** @var int */
    const APP = 6;

    /** @var int */
    const TIMEX = 7;

    /** @var int */
    const OSYNCE = 8;

    /** @var int */
    const SIGMA = 9;

    /** @var int */
    const WAHOO = 10;

    /** @var int */
    const BRYTON = 11;

    /** @var int */
    const TWONAV = 12;
}
