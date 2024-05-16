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
            2962 => DeviceProfile::GARMIN_APPROACH_X_10,
            2266 => DeviceProfile::GARMIN_APPROACH_S_20,
            3049 => DeviceProfile::GARMIN_APPROACH_S_10,
            1936 => DeviceProfile::GARMIN_APPROACH_S_6,
            3085 => DeviceProfile::GARMIN_APPROACH_G_80,
            2292 => DeviceProfile::GARMIN_APPROACH_X_40,
            3314 => DeviceProfile::GARMIN_APPROACH_S_40,
            2656 => DeviceProfile::GARMIN_APPROACH_S_60,
            2907 => DeviceProfile::GARMIN_APPROACH_S_60,
            1405 => DeviceProfile::GARMIN_APPROACH_G_10,
            3934 => DeviceProfile::GARMIN_APPROACH_S_42,
            3700 => DeviceProfile::GARMIN_APPROACH_S_62,
            3393 => DeviceProfile::GARMIN_APPROACH_S_62,
            4234 => DeviceProfile::GARMIN_APPROACH_S_70,
            4233 => DeviceProfile::GARMIN_APPROACH_S_70,
            2859 => DeviceProfile::GARMIN_DESCENT_MK_1,
            2991 => DeviceProfile::GARMIN_DESCENT_MK_1,
            3542 => DeviceProfile::GARMIN_DESCENT_MK_2_S,
            3930 => DeviceProfile::GARMIN_DESCENT_MK_2_S,
            3258 => DeviceProfile::GARMIN_DESCENT_MK_2_I,
            3702 => DeviceProfile::GARMIN_DESCENT_MK_2_I,
            4222 => DeviceProfile::GARMIN_DESCENT_MK_3_I,
            4223 => DeviceProfile::GARMIN_DESCENT_MK_3_I,
            4005 => DeviceProfile::GARMIN_DESCENT_G_1,
            4132 => DeviceProfile::GARMIN_DESCENT_G_1_SOLAR,
            2187 => DeviceProfile::GARMIN_D_2_AIR,
            3198 => DeviceProfile::GARMIN_D_2_DELTA_P_X,
            3196 => DeviceProfile::GARMIN_D_2_DELTA_S,
            3197 => DeviceProfile::GARMIN_D_2_DELTA,
            2262 => DeviceProfile::GARMIN_D_2_BRAVO,
            2547 => DeviceProfile::GARMIN_D_2_BRAVO_TITANIUM,
            2819 => DeviceProfile::GARMIN_D_2_CHARLIE,
            4079 => DeviceProfile::GARMIN_D_2_MACH_1,
            4556 => DeviceProfile::GARMIN_D_2_MACH_1_PRO,
            3011 => DeviceProfile::GARMIN_EDGE_EXPLORE,
            2204 => DeviceProfile::GARMIN_EDGE_EXPLORE_1000,
            2531 => DeviceProfile::GARMIN_EDGE_EXPLORE_820,
            4169 => DeviceProfile::GARMIN_EDGE_EXPLORE_2,
            1736 => DeviceProfile::GARMIN_EDGE_TOURING,
            2238 => DeviceProfile::GARMIN_EDGE_20,
            2290 => DeviceProfile::GARMIN_EDGE_20,
            2147 => DeviceProfile::GARMIN_EDGE_25,
            2288 => DeviceProfile::GARMIN_EDGE_25,
            2289 => DeviceProfile::GARMIN_EDGE_25,
            3092 => DeviceProfile::GARMIN_EDGE_130,
            2909 => DeviceProfile::GARMIN_EDGE_130,
            3558 => DeviceProfile::GARMIN_EDGE_130_PLUS,
            1325 => DeviceProfile::GARMIN_EDGE_200,
            1555 => DeviceProfile::GARMIN_EDGE_200,
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
            2260 => DeviceProfile::GARMIN_EDGE_520,
            2261 => DeviceProfile::GARMIN_EDGE_520,
            3349 => DeviceProfile::GARMIN_EDGE_530,
            3121 => DeviceProfile::GARMIN_EDGE_530,
            4061 => DeviceProfile::GARMIN_EDGE_540,
            625 => DeviceProfile::GARMIN_EDGE_705,
            1169 => DeviceProfile::GARMIN_EDGE_800,
            1386 => DeviceProfile::GARMIN_EDGE_800,
            1334 => DeviceProfile::GARMIN_EDGE_800,
            1497 => DeviceProfile::GARMIN_EDGE_800,
            1333 => DeviceProfile::GARMIN_EDGE_800,
            1567 => DeviceProfile::GARMIN_EDGE_810,
            1822 => DeviceProfile::GARMIN_EDGE_810,
            1721 => DeviceProfile::GARMIN_EDGE_810,
            1823 => DeviceProfile::GARMIN_EDGE_810,
            3766 => DeviceProfile::GARMIN_EDGE_810,
            2530 => DeviceProfile::GARMIN_EDGE_820,
            2599 => DeviceProfile::GARMIN_EDGE_820,
            2600 => DeviceProfile::GARMIN_EDGE_820,
            2628 => DeviceProfile::GARMIN_EDGE_820,
            2629 => DeviceProfile::GARMIN_EDGE_820,
            2630 => DeviceProfile::GARMIN_EDGE_820,
            3122 => DeviceProfile::GARMIN_EDGE_830,
            3350 => DeviceProfile::GARMIN_EDGE_830,
            4062 => DeviceProfile::GARMIN_EDGE_840,
            1836 => DeviceProfile::GARMIN_EDGE_1000,
            2070 => DeviceProfile::GARMIN_EDGE_1000,
            2053 => DeviceProfile::GARMIN_EDGE_1000,
            2100 => DeviceProfile::GARMIN_EDGE_1000,
            2052 => DeviceProfile::GARMIN_EDGE_1000,
            2274 => DeviceProfile::GARMIN_EDGE_1000,
            2713 => DeviceProfile::GARMIN_EDGE_1030,
            3095 => DeviceProfile::GARMIN_EDGE_1030,
            3570 => DeviceProfile::GARMIN_EDGE_1030_PLUS,
            2924 => DeviceProfile::GARMIN_EDGE_1030,
            4305 => DeviceProfile::GARMIN_EDGE_1040_SOLAR,
            3841 => DeviceProfile::GARMIN_EDGE_1040,
            3638 => DeviceProfile::GARMIN_ENDURO,
            3872 => DeviceProfile::GARMIN_ENDURO,
            4341 => DeviceProfile::GARMIN_ENDURO_2,
            1988 => DeviceProfile::GARMIN_EPIX,
            2332 => DeviceProfile::GARMIN_EPIX,
            2457 => DeviceProfile::GARMIN_EPIX,
            3943 => DeviceProfile::GARMIN_EPIX_2,
            3944 => DeviceProfile::GARMIN_EPIX_2,
            4313 => DeviceProfile::GARMIN_EPIX_2_PRO,
            4312 => DeviceProfile::GARMIN_EPIX_PRO,
            4314 => DeviceProfile::GARMIN_EPIX_PRO,
            2140 => DeviceProfile::GARMIN_ETREX_TOUCH,
            4201 => DeviceProfile::GARMIN_ETREX_S_E,
            1551 => DeviceProfile::GARMIN_FENIX,
            1967 => DeviceProfile::GARMIN_FENIX_2,
            2050 => DeviceProfile::GARMIN_FENIX_3,
            2188 => DeviceProfile::GARMIN_FENIX_3,
            2293 => DeviceProfile::GARMIN_FENIX_3,
            2407 => DeviceProfile::GARMIN_FENIX_3,
            2408 => DeviceProfile::GARMIN_FENIX_3,
            2189 => DeviceProfile::GARMIN_FENIX_3,
            2375 => DeviceProfile::GARMIN_FENIX_3,
            2432 => DeviceProfile::GARMIN_FENIX_3,
            2413 => DeviceProfile::GARMIN_FENIX_3_H_R,
            20533 => DeviceProfile::GARMIN_FENIX_3_H_R,
            2473 => DeviceProfile::GARMIN_FENIX_3_H_R,
            2474 => DeviceProfile::GARMIN_FENIX_3_H_R,
            2475 => DeviceProfile::GARMIN_FENIX_3_H_R,
            2476 => DeviceProfile::GARMIN_FENIX_3_H_R,
            2477 => DeviceProfile::GARMIN_FENIX_3_H_R,
            2697 => DeviceProfile::GARMIN_FENIX_5,
            4125 => DeviceProfile::GARMIN_FENIX_5,
            4135 => DeviceProfile::GARMIN_FENIX_5,
            3110 => DeviceProfile::GARMIN_FENIX_5_PLUS,
            3909 => DeviceProfile::GARMIN_FENIX_5_PLUS,
            2796 => DeviceProfile::GARMIN_FENIX_5_WIFI,
            2797 => DeviceProfile::GARMIN_FENIX_5_S,
            2544 => DeviceProfile::GARMIN_FENIX_5_S,
            2604 => DeviceProfile::GARMIN_FENIX_5_X,
            3843 => DeviceProfile::GARMIN_EDGE_1040_SOLAR,
            2798 => DeviceProfile::GARMIN_FENIX_5_X,
            3089 => DeviceProfile::GARMIN_FENIX_5_X_PLUS,
            3135 => DeviceProfile::GARMIN_FENIX_5_X_PLUS,
            2900 => DeviceProfile::GARMIN_FENIX_5_S_PLUS,
            3134 => DeviceProfile::GARMIN_FENIX_5_S_PLUS,
            3111 => DeviceProfile::GARMIN_FENIX_5_X_PLUS,
            3112 => DeviceProfile::GARMIN_EDGE_520_PLUS,
            3142 => DeviceProfile::GARMIN_EDGE_520_PLUS,
            3615 => DeviceProfile::GARMIN_LILY,
            3812 => DeviceProfile::GARMIN_EDGE_1030_PLUS,
            3813 => DeviceProfile::GARMIN_EDGE_130_PLUS,
            3284 => DeviceProfile::GARMIN_GPSMAP_66_I,
            3694 => DeviceProfile::GARMIN_GPSMAP_66_S_R,
            4336 => DeviceProfile::GARMIN_GPSMAP_67_I,
            3287 => DeviceProfile::GARMIN_FENIX_6_S,
            3288 => DeviceProfile::GARMIN_FENIX_6_S_PRO,
            3769 => DeviceProfile::GARMIN_FENIX_6_S_PRO_DUAL_POWER,
            3289 => DeviceProfile::GARMIN_FENIX_6,
            3290 => DeviceProfile::GARMIN_FENIX_6_PRO,
            3771 => DeviceProfile::GARMIN_FENIX_6_PRO,
            3767 => DeviceProfile::GARMIN_FENIX_6_PRO_SOLAR,
            3291 => DeviceProfile::GARMIN_FENIX_6_X_PRO,
            3512 => DeviceProfile::GARMIN_FENIX_6_S,
            3513 => DeviceProfile::GARMIN_FENIX_6_S_PRO,
            3514 => DeviceProfile::GARMIN_FENIX_6,
            3764 => DeviceProfile::GARMIN_FENIX_6_S_SOLAR,
            3765 => DeviceProfile::GARMIN_FENIX_6_S_PRO_SOLAR,
            3515 => DeviceProfile::GARMIN_FENIX_6_PRO_SAPPHIRE,
            3516 => DeviceProfile::GARMIN_FENIX_6_X_SAPPHIRE,
            3906 => DeviceProfile::GARMIN_FENIX_7_SAPPHIRE_SOLAR,
            3907 => DeviceProfile::GARMIN_FENIX_7_X_SOLAR,
            3976 => DeviceProfile::GARMIN_FENIX_7_X_SAPPHIRE_SOLAR,
            3905 => DeviceProfile::GARMIN_FENIX_7_S_SAPPHIRE_SOLAR,
            3908 => DeviceProfile::GARMIN_FENIX_7_S_SAPPHIRE_SOLAR,
            4374 => DeviceProfile::GARMIN_FENIX_7_S_PRO_SAPPHIRE_SOLAR,
            4375 => DeviceProfile::GARMIN_FENIX_7_PRO_SOLAR,
            1482 => DeviceProfile::GARMIN_FORERUNNER_10,
            1688 => DeviceProfile::GARMIN_FORERUNNER_10,
            1903 => DeviceProfile::GARMIN_FORERUNNER_15,
            2061 => DeviceProfile::GARMIN_FORERUNNER_15,
            2148 => DeviceProfile::GARMIN_FORERUNNER_25,
            2891 => DeviceProfile::GARMIN_FORERUNNER_30,
            2977 => DeviceProfile::GARMIN_FORERUNNER_30,
            2503 => DeviceProfile::GARMIN_FORERUNNER_35,
            2650 => DeviceProfile::GARMIN_FORERUNNER_35,
            2667 => DeviceProfile::GARMIN_FORERUNNER_35,
            2668 => DeviceProfile::GARMIN_FORERUNNER_35,
            2814 => DeviceProfile::GARMIN_FORERUNNER_35,
            2727 => DeviceProfile::GARMIN_FORERUNNER_35,
            3469 => DeviceProfile::GARMIN_FORERUNNER_45,
            3847 => DeviceProfile::GARMIN_FORERUNNER_45_PLUS,
            3282 => DeviceProfile::GARMIN_FORERUNNER_45,
            3869 => DeviceProfile::GARMIN_FORERUNNER_55,
            4033 => DeviceProfile::GARMIN_FORERUNNER_55,
            1436 => DeviceProfile::GARMIN_FORERUNNER_70,
            1124 => DeviceProfile::GARMIN_FORERUNNER_110,
            1274 => DeviceProfile::GARMIN_FORERUNNER_110,
            4432 => DeviceProfile::GARMIN_FORERUNNER_165,
            1360 => DeviceProfile::GARMIN_FORERUNNER_210,
            1632 => DeviceProfile::GARMIN_FORERUNNER_220,
            3187 => DeviceProfile::GARMIN_FORERUNNER_220,
            1631 => DeviceProfile::GARMIN_FORERUNNER_220,
            1931 => DeviceProfile::GARMIN_FORERUNNER_220,
            1930 => DeviceProfile::GARMIN_FORERUNNER_220,
            2073 => DeviceProfile::GARMIN_FORERUNNER_220,
            2174 => DeviceProfile::GARMIN_FORERUNNER_220,
            2153 => DeviceProfile::GARMIN_FORERUNNER_225,
            2219 => DeviceProfile::GARMIN_FORERUNNER_225,
            3990 => DeviceProfile::GARMIN_FORERUNNER_225_MUSIC,
            3991 => DeviceProfile::GARMIN_FORERUNNER_225_S_MUSIC,
            2313 => DeviceProfile::GARMIN_FORERUNNER_230,
            2157 => DeviceProfile::GARMIN_FORERUNNER_230,
            2431 => DeviceProfile::GARMIN_FORERUNNER_235,
            2396 => DeviceProfile::GARMIN_FORERUNNER_235,
            2733 => DeviceProfile::GARMIN_FORERUNNER_235,
            2397 => DeviceProfile::GARMIN_FORERUNNER_235,
            3144 => DeviceProfile::GARMIN_FORERUNNER_235,
            3076 => DeviceProfile::GARMIN_FORERUNNER_245,
            3145 => DeviceProfile::GARMIN_FORERUNNER_245,
            3914 => DeviceProfile::GARMIN_FORERUNNER_245,
            3321 => DeviceProfile::GARMIN_FORERUNNER_245_MUSIC,
            3077 => DeviceProfile::GARMIN_FORERUNNER_245_MUSIC,
            3913 => DeviceProfile::GARMIN_FORERUNNER_245_MUSIC,
            3992 => DeviceProfile::GARMIN_FORERUNNER_255,
            3993 => DeviceProfile::GARMIN_FORERUNNER_255_S,
            4257 => DeviceProfile::GARMIN_FORERUNNER_265,
            4258 => DeviceProfile::GARMIN_FORERUNNER_265_S,
            473 => DeviceProfile::GARMIN_FORERUNNER_301,
            474 => DeviceProfile::GARMIN_FORERUNNER_301,
            475 => DeviceProfile::GARMIN_FORERUNNER_301,
            494 => DeviceProfile::GARMIN_FORERUNNER_301,
            484 => DeviceProfile::GARMIN_FORERUNNER_305,
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
            2310 => DeviceProfile::GARMIN_FORERUNNER_630,
            2311 => DeviceProfile::GARMIN_FORERUNNER_630,
            2886 => DeviceProfile::GARMIN_FORERUNNER_645,
            3003 => DeviceProfile::GARMIN_FORERUNNER_645,
            2888 => DeviceProfile::GARMIN_FORERUNNER_645_MUSIC,
            3888 => DeviceProfile::GARMIN_FORERUNNER_645_MUSIC,
            3004 => DeviceProfile::GARMIN_FORERUNNER_645_MUSIC,
            2158 => DeviceProfile::GARMIN_FORERUNNER_735_X_T,
            2533 => DeviceProfile::GARMIN_FORERUNNER_735_X_T,
            2534 => DeviceProfile::GARMIN_FORERUNNER_735_X_T,
            3589 => DeviceProfile::GARMIN_FORERUNNER_745,
            3794 => DeviceProfile::GARMIN_FORERUNNER_745,
            1328 => DeviceProfile::GARMIN_FORERUNNER_910_X_T,
            1537 => DeviceProfile::GARMIN_FORERUNNER_910_X_T,
            1600 => DeviceProfile::GARMIN_FORERUNNER_910_X_T,
            1664 => DeviceProfile::GARMIN_FORERUNNER_910_X_T,
            1765 => DeviceProfile::GARMIN_FORERUNNER_920_X_T,
            2131 => DeviceProfile::GARMIN_FORERUNNER_920_X_T,
            2132 => DeviceProfile::GARMIN_FORERUNNER_920_X_T,
            2130 => DeviceProfile::GARMIN_FORERUNNER_920_X_T,
            2691 => DeviceProfile::GARMIN_FORERUNNER_935,
            3599 => DeviceProfile::GARMIN_FORERUNNER_935,
            2833 => DeviceProfile::GARMIN_FORERUNNER_935,
            3113 => DeviceProfile::GARMIN_FORERUNNER_945,
            3441 => DeviceProfile::GARMIN_FORERUNNER_945,
            3910 => DeviceProfile::GARMIN_FORERUNNER_945,
            3652 => DeviceProfile::GARMIN_FORERUNNER_945_LTE,
            4024 => DeviceProfile::GARMIN_FORERUNNER_955,
            4315 => DeviceProfile::GARMIN_FORERUNNER_965,
            4362 => DeviceProfile::GARMIN_FORETREX_801,
            3126 => DeviceProfile::GARMIN_INSTINCT,
            3889 => DeviceProfile::GARMIN_INSTINCT_2_S,
            4091 => DeviceProfile::GARMIN_INSTINCT_2_S,
            4394 => DeviceProfile::GARMIN_INSTINCT_2_X_SOLAR,
            3466 => DeviceProfile::GARMIN_INSTINCT_SOLAR,
            3778 => DeviceProfile::GARMIN_INSTINCT_SOLAR,
            4071 => DeviceProfile::GARMIN_INSTINCT_2_SOLAR_ONE_PIECE_LUFFY,
            4155 => DeviceProfile::GARMIN_INSTINCT_CROSSOVER,
            3498 => DeviceProfile::GARMIN_LEGACY_HERO_SAGA_REY,
            3499 => DeviceProfile::GARMIN_LEGACY_HERO_SAGA_DARTH_VADER,
            3538 => DeviceProfile::GARMIN_LEGACY_HERO_SAGA_DARTH_VADER,
            3809 => DeviceProfile::GARMIN_LILY,
            3420 => DeviceProfile::GARMIN_MARQ_DRIVER,
            3246 => DeviceProfile::GARMIN_MARQ_DRIVER,
            3421 => DeviceProfile::GARMIN_MARQ_AVIATOR,
            3247 => DeviceProfile::GARMIN_MARQ_AVIATOR,
            4124 => DeviceProfile::GARMIN_MARQ_AVIATOR_2,
            3248 => DeviceProfile::GARMIN_MARQ_CAPTAIN,
            3448 => DeviceProfile::GARMIN_MARQ_CAPTAIN,
            3249 => DeviceProfile::GARMIN_MARQ_COMMANDER,
            3449 => DeviceProfile::GARMIN_MARQ_COMMANDER,
            4472 => DeviceProfile::GARMIN_MARQ_COMMANDER_2_CARBON,
            3250 => DeviceProfile::GARMIN_MARQ_ADVENTURER,
            3251 => DeviceProfile::GARMIN_MARQ_ATHLETE,
            3451 => DeviceProfile::GARMIN_MARQ_ATHLETE,
            3648 => DeviceProfile::GARMIN_MARQ_ADVENTURER,
            3624 => DeviceProfile::GARMIN_MARQ_ADVENTURER,
            3450 => DeviceProfile::GARMIN_MARQ_EXPEDITION,
            3739 => DeviceProfile::GARMIN_MARQ_GOLFER,
            4105 => DeviceProfile::GARMIN_MARQ_GOLFER_2,
            3459 => DeviceProfile::GARMIN_MONTANA_700,
            4542 => DeviceProfile::GARMIN_TACTIX_7_AMOLED,
            3500 => DeviceProfile::GARMIN_LEGACY_HERO_CAPTAIN_MARVEL,
            3501 => DeviceProfile::GARMIN_LEGACY_HERO_FIRST_AVENGER,
            3536 => DeviceProfile::GARMIN_LEGACY_HERO_FIRST_AVENGER,
            2512 => DeviceProfile::GARMIN_OREGON_700,
            1499 => DeviceProfile::GARMIN_SWIM,
            3405 => DeviceProfile::GARMIN_SWIM_2,
            3639 => DeviceProfile::GARMIN_SWIM_2,
            3226 => DeviceProfile::GARMIN_VENU,
            3596 => DeviceProfile::GARMIN_VENU_SQ,
            3837 => DeviceProfile::GARMIN_VENU_SQ,
            3600 => DeviceProfile::GARMIN_VENU_SQ,
            3838 => DeviceProfile::GARMIN_VENU_SQ,
            4115 => DeviceProfile::GARMIN_VENU_SQ_2,
            4116 => DeviceProfile::GARMIN_VENU_SQ_2,
            4017 => DeviceProfile::GARMIN_VENU_2_PLUS,
            3851 => DeviceProfile::GARMIN_VENU_2_PLUS,
            3737 => DeviceProfile::GARMIN_VENU_DAIMLER,
            3740 => DeviceProfile::GARMIN_VENU_DAIMLER,
            3950 => DeviceProfile::GARMIN_VENU_2,
            3703 => DeviceProfile::GARMIN_VENU_2,
            3704 => DeviceProfile::GARMIN_VENU_2,
            3949 => DeviceProfile::GARMIN_VENU_2,
            4260 => DeviceProfile::GARMIN_VENU_3,
            4261 => DeviceProfile::GARMIN_VENU_3_S,
            1907 => DeviceProfile::GARMIN_VIVO_ACTIVE,
            2160 => DeviceProfile::GARMIN_VIVO_ACTIVE,
            2337 => DeviceProfile::GARMIN_VIVO_ACTIVE_H_R,
            2497 => DeviceProfile::GARMIN_VIVO_ACTIVE_H_R,
            2976 => DeviceProfile::GARMIN_VIVO_ACTIVE_3,
            3473 => DeviceProfile::GARMIN_VIVO_ACTIVE_3,
            2700 => DeviceProfile::GARMIN_VIVO_ACTIVE_3,
            3446 => DeviceProfile::GARMIN_VIVO_ACTIVE_3,
            2988 => DeviceProfile::GARMIN_VIVO_ACTIVE_3_MUSIC,
            3163 => DeviceProfile::GARMIN_VIVO_ACTIVE_3_MUSIC,
            3066 => DeviceProfile::GARMIN_VIVO_ACTIVE_3_MUSIC,
            3225 => DeviceProfile::GARMIN_VIVO_ACTIVE_4,
            3388 => DeviceProfile::GARMIN_VIVO_ACTIVE_4,
            3389 => DeviceProfile::GARMIN_VIVO_ACTIVE_4,
            3224 => DeviceProfile::GARMIN_VIVO_ACTIVE_4_S,
            3387 => DeviceProfile::GARMIN_VIVO_ACTIVE_4_S,
            4426 => DeviceProfile::GARMIN_VIVO_ACTIVE_5,
            1837 => DeviceProfile::GARMIN_VIVO_FIT,
            2606 => DeviceProfile::GARMIN_VIVO_FIT_JR,
            2150 => DeviceProfile::GARMIN_VIVO_FIT_2,
            2406 => DeviceProfile::GARMIN_VIVO_FIT_3,
            2368 => DeviceProfile::GARMIN_VIVO_MOVE,
            3422 => DeviceProfile::GARMIN_VIVO_MOVE_3,
            2772 => DeviceProfile::GARMIN_VIVO_MOVE_H_R,
            2945 => DeviceProfile::GARMIN_VIVO_MOVE_H_R,
            3378 => DeviceProfile::GARMIN_VIVO_MOVE_3_S,
            3308 => DeviceProfile::GARMIN_VIVO_MOVE_LUXE,
            3982 => DeviceProfile::GARMIN_VIVO_MOVE_SPORT,
            3983 => DeviceProfile::GARMIN_VIVO_MOVE_TREND,
            3572 => DeviceProfile::GARMIN_VIVO_LUXE,
            2623 => DeviceProfile::GARMIN_VIVO_SPORT,
            2832 => DeviceProfile::GARMIN_VIVO_SPORT,
            1956 => DeviceProfile::GARMIN_VIVO_SMART,
            2135 => DeviceProfile::GARMIN_VIVO_SMART,
            2294 => DeviceProfile::GARMIN_VIVO_SMART,
            2271 => DeviceProfile::GARMIN_VIVO_SMART_2,
            2831 => DeviceProfile::GARMIN_VIVO_SMART_3,
            2622 => DeviceProfile::GARMIN_VIVO_SMART_3,
            2927 => DeviceProfile::GARMIN_VIVO_SMART_4,
            3218 => DeviceProfile::GARMIN_VIVO_SMART_4,
            4063 => DeviceProfile::GARMIN_VIVO_SMART_5,
            2347 => DeviceProfile::GARMIN_VIVO_SMART_GPS_H_R,
            2362 => DeviceProfile::GARMIN_VIVO_SMART_GPS_H_R,
            2348 => DeviceProfile::GARMIN_VIVO_SMART_H_R,
            2361 => DeviceProfile::GARMIN_VIVO_SMART_H_R,
            3273 => DeviceProfile::GARMIN_INSTINCT,
            3192 => DeviceProfile::GARMIN_SPEED_SENSOR_2,
            1438 => DeviceProfile::GARMIN_FIT_ANDROID,
            1439 => DeviceProfile::GARMIN_FIT_IPHONE,
        ];
    }

    // 3765 => fenix 6s Pro Solar
    // 3187 = Rino 7 Series

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
