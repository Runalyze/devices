<?php

/*
 * This file is part of the Runalyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Runalyze\Devices\Mapping;

use Runalyze\Devices\Device\DeviceProfile;

class GarminFitSdkMapping
{
    /** @var int[]|string[] */
    protected $Mapping = [];

    protected function getMapping()
    {
        return [
            2266 => DeviceProfile::GARMIN_APPROACH_S_20,
            1936 => DeviceProfile::GARMIN_APPROACH_S_6,
            2262 => DeviceProfile::GARMIN_D_2_BRAVO,
            2547 => DeviceProfile::GARMIN_D_2_BRAVO_TITANIUM,
            2204 => DeviceProfile::GARMIN_EDGE_EXPLORE_1000,
            2531 => DeviceProfile::GARMIN_EDGE_EXPLORE_820,
            1736 => DeviceProfile::GARMIN_EDGE_TOURING,
            1836 => DeviceProfile::GARMIN_EDGE_1000,
            2070 => DeviceProfile::GARMIN_EDGE_1000,
            2053 => DeviceProfile::GARMIN_EDGE_1000,
            2100 => DeviceProfile::GARMIN_EDGE_1000,
            2052 => DeviceProfile::GARMIN_EDGE_1000,
            2238 => DeviceProfile::GARMIN_EDGE_20,
            1325 => DeviceProfile::GARMIN_EDGE_200,
            1555 => DeviceProfile::GARMIN_EDGE_200,
            2147 => DeviceProfile::GARMIN_EDGE_25,
            1036 => DeviceProfile::GARMIN_EDGE_500,
            1387 => DeviceProfile::GARMIN_EDGE_500,
            1213 => DeviceProfile::GARMIN_EDGE_500,
            1422 => DeviceProfile::GARMIN_EDGE_500,
            1199 => DeviceProfile::GARMIN_EDGE_500,
            1561 => DeviceProfile::GARMIN_EDGE_510,
            1821 => DeviceProfile::GARMIN_EDGE_510,
            1742 => DeviceProfile::GARMIN_EDGE_510,
            1918 => DeviceProfile::GARMIN_EDGE_510,
            2067 => DeviceProfile::GARMIN_EDGE_520,
            1169 => DeviceProfile::GARMIN_EDGE_800,
            1386 => DeviceProfile::GARMIN_EDGE_800,
            1334 => DeviceProfile::GARMIN_EDGE_800,
            1497 => DeviceProfile::GARMIN_EDGE_800,
            1333 => DeviceProfile::GARMIN_EDGE_800,
            1567 => DeviceProfile::GARMIN_EDGE_810,
            1822 => DeviceProfile::GARMIN_EDGE_810,
            1721 => DeviceProfile::GARMIN_EDGE_810,
            1823 => DeviceProfile::GARMIN_EDGE_810,
            2530 => DeviceProfile::GARMIN_EDGE_820,
            3122 => DeviceProfile::GARMIN_EDGE_830,
            1988 => DeviceProfile::GARMIN_EPIX,
            2140 => DeviceProfile::GARMIN_ETREX_TOUCH,
            1551 => DeviceProfile::GARMIN_FENIX,
            1967 => DeviceProfile::GARMIN_FENIX_2,
            2050 => DeviceProfile::GARMIN_FENIX_3,
            2188 => DeviceProfile::GARMIN_FENIX_3,
            2189 => DeviceProfile::GARMIN_FENIX_3,
            2432 => DeviceProfile::GARMIN_FENIX_3,
            2413 => DeviceProfile::GARMIN_FENIX_3_H_R,
            2697 => DeviceProfile::GARMIN_FENIX_5,
            2544 => DeviceProfile::GARMIN_FENIX_5_S,
            2604 => DeviceProfile::GARMIN_FENIX_5_X,
            3110 => DeviceProfile::GARMIN_FENIX_5_PLUS,
            3111 => DeviceProfile::GARMIN_FENIX_5_X_PLUS,
            3112 => DeviceProfile::GARMIN_EDGE_520_PLUS,
            3287 => DeviceProfile::GARMIN_FENIX_6_S,
            3288 => DeviceProfile::GARMIN_FENIX_6_S_PRO,
            3289 => DeviceProfile::GARMIN_FENIX_6,
            3290 => DeviceProfile::GARMIN_FENIX_6_PRO,
            3291 => DeviceProfile::GARMIN_FENIX_6_X_PRO,
            1482 => DeviceProfile::GARMIN_FORERUNNER_10,
            1688 => DeviceProfile::GARMIN_FORERUNNER_10,
            1124 => DeviceProfile::GARMIN_FORERUNNER_110,
            1274 => DeviceProfile::GARMIN_FORERUNNER_110,
            1903 => DeviceProfile::GARMIN_FORERUNNER_15,
            2061 => DeviceProfile::GARMIN_FORERUNNER_15,
            1360 => DeviceProfile::GARMIN_FORERUNNER_210,
            1631 => DeviceProfile::GARMIN_FORERUNNER_220,
            1931 => DeviceProfile::GARMIN_FORERUNNER_220,
            1930 => DeviceProfile::GARMIN_FORERUNNER_220,
            2073 => DeviceProfile::GARMIN_FORERUNNER_220,
            2174 => DeviceProfile::GARMIN_FORERUNNER_220,
            2153 => DeviceProfile::GARMIN_FORERUNNER_225,
            2219 => DeviceProfile::GARMIN_FORERUNNER_225,
            14 => DeviceProfile::GARMIN_FORERUNNER_225,
            2157 => DeviceProfile::GARMIN_FORERUNNER_230,
            2431 => DeviceProfile::GARMIN_FORERUNNER_235,
            2148 => DeviceProfile::GARMIN_FORERUNNER_25,
            473 => DeviceProfile::GARMIN_FORERUNNER_301,
            474 => DeviceProfile::GARMIN_FORERUNNER_301,
            475 => DeviceProfile::GARMIN_FORERUNNER_301,
            494 => DeviceProfile::GARMIN_FORERUNNER_301,
            1018 => DeviceProfile::GARMIN_FORERUNNER_310_X_T,
            1446 => DeviceProfile::GARMIN_FORERUNNER_310_X_T,
            717 => DeviceProfile::GARMIN_FORERUNNER_405,
            987 => DeviceProfile::GARMIN_FORERUNNER_405,
            782 => DeviceProfile::GARMIN_FORERUNNER_50,
            988 => DeviceProfile::GARMIN_FORERUNNER_60,
            1345 => DeviceProfile::GARMIN_FORERUNNER_610,
            1410 => DeviceProfile::GARMIN_FORERUNNER_610,
            1623 => DeviceProfile::GARMIN_FORERUNNER_620,
            1929 => DeviceProfile::GARMIN_FORERUNNER_620,
            1928 => DeviceProfile::GARMIN_FORERUNNER_620,
            2072 => DeviceProfile::GARMIN_FORERUNNER_620,
            2173 => DeviceProfile::GARMIN_FORERUNNER_620,
            2156 => DeviceProfile::GARMIN_FORERUNNER_630,
            2886 => DeviceProfile::GARMIN_FORERUNNER_645,
            2888 => DeviceProfile::GARMIN_FORERUNNER_645_MUSIC,
            1436 => DeviceProfile::GARMIN_FORERUNNER_70,
            1328 => DeviceProfile::GARMIN_FORERUNNER_910_X_T,
            1537 => DeviceProfile::GARMIN_FORERUNNER_910_X_T,
            1600 => DeviceProfile::GARMIN_FORERUNNER_910_X_T,
            1664 => DeviceProfile::GARMIN_FORERUNNER_910_X_T,
            1765 => DeviceProfile::GARMIN_FORERUNNER_920_X_T,
            2131 => DeviceProfile::GARMIN_FORERUNNER_920_X_T,
            2132 => DeviceProfile::GARMIN_FORERUNNER_920_X_T,
            2130 => DeviceProfile::GARMIN_FORERUNNER_920_X_T,
            2691 => DeviceProfile::GARMIN_FORERUNNER_935_X_T,
            3113 => DeviceProfile::GARMIN_FORERUNNER_945,
            1499 => DeviceProfile::GARMIN_SWIM,
            1907 => DeviceProfile::GARMIN_VIVO_ACTIVE,
            2160 => DeviceProfile::GARMIN_VIVO_ACTIVE,
            2337 => DeviceProfile::GARMIN_VIVO_ACTIVE_H_R,
            1837 => DeviceProfile::GARMIN_VIVO_FIT,
            2606 => DeviceProfile::GARMIN_VIVO_FIT_JR,
            2150 => DeviceProfile::GARMIN_VIVO_FIT_2,
            2406 => DeviceProfile::GARMIN_VIVO_FIT_3,
            2368 => DeviceProfile::GARMIN_VIVO_MOVE,
            1956 => DeviceProfile::GARMIN_VIVO_SMART,
            2135 => DeviceProfile::GARMIN_VIVO_SMART,
            2347 => DeviceProfile::GARMIN_VIVO_SMART_GPS_H_R,
            2348 => DeviceProfile::GARMIN_VIVO_SMART_H_R,
        ];
    }

    public function __construct()
    {
        $this->Mapping = $this->getMapping();
    }

    /**
     * @param  int|string $value
     * @return int|string
     */
    public function toInternal($value)
    {
        if (isset($this->Mapping[$value])) {
            return $this->Mapping[$value];
        }

        return;
    }
}
