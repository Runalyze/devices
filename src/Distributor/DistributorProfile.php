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

    /** @var int */
    const APPLE = 13;

    /** @var int */
    const ARIVAL = 14;

    /** @var int */
    const COROS = 15;

    /** @var int */
    const FITBIT = 16;

    /** @var int */
    const HUAMI = 17;

    /** @var int */
    const SOLEUS = 18;

    /** @var int */
    const SONY = 19;

    /** @var int */
    const HUAWEI = 20;

    /** @var int */
    const MISFIT = 21;

    /** @var int */
    const SAMSUNG = 22;

    /** @var int */
    const IGPSPORT = 23;

    /** @var int */
    const LEZYNE = 25;

    /** @var int */
    const ELITE = 26;

    /** @var int */
    const WITHINGS = 27;

    /** @var int */
    const STRYD = 28;

    /** @var int */
    const STAGES_CYCLING = 30;

    /** @var int */
    const CONCEPT_2 = 31;

    /** @var int */
    const WATTBIKE = 32;

    /** @var int */
    const MIO = 33;

    /** @var int */
    const SPECIALIZED = 34;

    /** @var int */
    const FORM = 35;

    /** @var int */
    const HAMMERHEAD = 36;

    /** @var int */
    const PELETON = 37;

    /** @var int */
    const KIPRUN = 38;

    /** @var int */
    const CYCPLUS = 39;

    /** @var int */
    const DABUZIDUO = 40;

    /** @var int */
    const FITCARE = 41;

    /** @var int */
    const COOPSO = 42;

    /** @var int */
    const SCOSCHE = 43;

    /** @var int */
    const VDO = 44;

    /** @var int */
    const MAGENE = 45;
}
