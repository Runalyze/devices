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

    const GARMIN = 1;
    const POLAR = 2;
    const SUUNTO = 3;
    const TOM_TOM = 4;
    const EPSON = 5;
    const APP = 6;
    const TIMEX = 7;
    const OSYNCE = 8;
    const SIGMA = 9;
    const WAHOO = 10;
    const BRYTON = 11;
    const TWONAV = 12;
    const APPLE = 13;
    const ARIVAL = 14;
    const COROS = 15;
    const FITBIT = 16;
    const HUAMI = 17;
    const SOLEUS = 18;
    const SONY = 19;
    const HUAWEI = 20;
    const MISFIT = 21;
    const SAMSUNG = 22;
    const IGPSPORT = 23;
    const LEZYNE = 25;
    const ELITE = 26;
    const WITHINGS = 27;
    const STRYD = 28;
    const STAGES_CYCLING = 30;
    const CONCEPT_2 = 31;
    const WATTBIKE = 32;
    const MIO = 33;
    const SPECIALIZED = 34;
    const FORM = 35;
    const HAMMERHEAD = 36;
    const PELETON = 37;
    const KIPRUN = 38;
    const CYCPLUS = 39;
    const DABUZIDUO = 40;
    const FITCARE = 41;
    const COOPSO = 42;
    const SCOSCHE = 43;
    const VDO = 44;
    const MAGENE = 45;
}
