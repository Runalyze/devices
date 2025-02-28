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

use Runalyze\Devices\Device\DeviceProfile;

class Garmin extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::GARMIN;
    }

    public function getName(): string
    {
        return 'Garmin';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::GARMIN_UNKNOWN,
            DeviceProfile::GARMIN_APPROACH_S_6,
            DeviceProfile::GARMIN_APPROACH_S_10,
            DeviceProfile::GARMIN_APPROACH_S_20,
            DeviceProfile::GARMIN_APPROACH_S_40,
            DeviceProfile::GARMIN_APPROACH_X_40,
            DeviceProfile::GARMIN_APPROACH_S_60,
            DeviceProfile::GARMIN_APPROACH_S_62,
            DeviceProfile::GARMIN_DESCENT_MK_1,
            DeviceProfile::GARMIN_EDGE_20,
            DeviceProfile::GARMIN_EDGE_25,
            DeviceProfile::GARMIN_EDGE_200,
            DeviceProfile::GARMIN_EDGE_305,
            DeviceProfile::GARMIN_EDGE_500,
            DeviceProfile::GARMIN_EDGE_510,
            DeviceProfile::GARMIN_EDGE_520,
            DeviceProfile::GARMIN_EDGE_520_PLUS,
            DeviceProfile::GARMIN_EDGE_605,
            DeviceProfile::GARMIN_EDGE_705,
            DeviceProfile::GARMIN_EDGE_800,
            DeviceProfile::GARMIN_EDGE_810,
            DeviceProfile::GARMIN_EDGE_820,
            DeviceProfile::GARMIN_EDGE_830,
            DeviceProfile::GARMIN_EDGE_1000,
            DeviceProfile::GARMIN_EDGE_1030,
            DeviceProfile::GARMIN_EDGE_EXPLORE_820,
            DeviceProfile::GARMIN_EDGE_EXPLORE_1000,
            DeviceProfile::GARMIN_EDGE_TOURING,
            DeviceProfile::GARMIN_EPIX,
            DeviceProfile::GARMIN_ETREX_TOUCH,
            DeviceProfile::GARMIN_FENIX,
            DeviceProfile::GARMIN_FENIX_2,
            DeviceProfile::GARMIN_FENIX_3,
            DeviceProfile::GARMIN_FENIX_3_H_R,
            DeviceProfile::GARMIN_FENIX_5,
            DeviceProfile::GARMIN_FENIX_5_PLUS,
            DeviceProfile::GARMIN_FENIX_5_WIFI,
            DeviceProfile::GARMIN_FENIX_5_S,
            DeviceProfile::GARMIN_FENIX_5_S_PLUS,
            DeviceProfile::GARMIN_FENIX_5_X,
            DeviceProfile::GARMIN_FENIX_5_X_PLUS,
            DeviceProfile::GARMIN_FENIX_6,
            DeviceProfile::GARMIN_FENIX_6_S,
            DeviceProfile::GARMIN_FENIX_6_S_PRO,
            DeviceProfile::GARMIN_FENIX_6_X,
            DeviceProfile::GARMIN_FENIX_6_X_PRO,
            DeviceProfile::GARMIN_FENIX_E,
            DeviceProfile::GARMIN_FENIX_8_AMOLED_43,
            DeviceProfile::GARMIN_FENIX_8_AMOLED_47,
            DeviceProfile::GARMIN_FENIX_8_AMOLED_51,
            DeviceProfile::GARMIN_FENIX_8_SOLAR_43,
            DeviceProfile::GARMIN_FENIX_8_SOLAR_47,
            DeviceProfile::GARMIN_FENIX_8_SOLAR_51,
            DeviceProfile::GARMIN_FORERUNNER_10,
            DeviceProfile::GARMIN_FORERUNNER_15,
            DeviceProfile::GARMIN_FORERUNNER_25,
            DeviceProfile::GARMIN_FORERUNNER_30,
            DeviceProfile::GARMIN_FORERUNNER_35,
            DeviceProfile::GARMIN_FORERUNNER_45,
            DeviceProfile::GARMIN_FORERUNNER_45_S,
            DeviceProfile::GARMIN_FORERUNNER_45_PLUS,
            DeviceProfile::GARMIN_FORERUNNER_50,
            DeviceProfile::GARMIN_FORERUNNER_55,
            DeviceProfile::GARMIN_FORERUNNER_60,
            DeviceProfile::GARMIN_FORERUNNER_70,
            DeviceProfile::GARMIN_FORERUNNER_245,
            DeviceProfile::GARMIN_FORERUNNER_245_MUSIC,
            DeviceProfile::GARMIN_FORERUNNER_301,
            DeviceProfile::GARMIN_FORERUNNER_305,
            DeviceProfile::GARMIN_FORERUNNER_405_C_X,
            DeviceProfile::GARMIN_FORERUNNER_645,
            DeviceProfile::GARMIN_FORERUNNER_645_MUSIC,
            DeviceProfile::GARMIN_FORERUNNER_735_X_T,
            DeviceProfile::GARMIN_FORERUNNER_910_X_T,
            DeviceProfile::GARMIN_FORERUNNER_920_X_T,
            DeviceProfile::GARMIN_FORERUNNER_935,
            DeviceProfile::GARMIN_FORERUNNER_945,
            DeviceProfile::GARMIN_FORERUNNER_945_LTE,
            DeviceProfile::GARMIN_INSTINCT,
            DeviceProfile::GARMIN_MARQ_ADVENTURER,
            DeviceProfile::GARMIN_MARQ_ATHLETE,
            DeviceProfile::GARMIN_MARQ_AVIATOR,
            DeviceProfile::GARMIN_MARQ_CAPTAIN,
            DeviceProfile::GARMIN_MARQ_COMMANDER,
            DeviceProfile::GARMIN_MARQ_DRIVER,
            DeviceProfile::GARMIN_MOBILE_IOS,
            DeviceProfile::GARMIN_MONTANA_610,
            DeviceProfile::GARMIN_MONTANA_680,
            DeviceProfile::GARMIN_MONTANA_680_T,
            DeviceProfile::GARMIN_OREGON_300,
            DeviceProfile::GARMIN_OREGON_400_T,
            DeviceProfile::GARMIN_OREGON_450,
            DeviceProfile::GARMIN_OREGON_450_T,
            DeviceProfile::GARMIN_OREGON_550,
            DeviceProfile::GARMIN_OREGON_600,
            DeviceProfile::GARMIN_OREGON_700,
            DeviceProfile::GARMIN_OREGON_750,
            DeviceProfile::GARMIN_OREGON_750_T,
            DeviceProfile::GARMIN_QUATIX_5,
            DeviceProfile::GARMIN_SPEED_SENSOR_2,
            DeviceProfile::GARMIN_SWIM,
            DeviceProfile::GARMIN_SWIM_2,
            DeviceProfile::GARMIN_TACTIX_CHARLIE,
            DeviceProfile::GARMIN_TACTIX_DELTA,
            DeviceProfile::GARMIN_VENU,
            DeviceProfile::GARMIN_VIVO_ACTIVE,
            DeviceProfile::GARMIN_VIVO_ACTIVE_3,
            DeviceProfile::GARMIN_VIVO_ACTIVE_3_MUSIC,
            DeviceProfile::GARMIN_VIVO_ACTIVE_4,
            DeviceProfile::GARMIN_VIVO_ACTIVE_4_S,
            DeviceProfile::GARMIN_VIVO_ACTIVE_5,
            DeviceProfile::GARMIN_VIVO_ACTIVE_H_R,
            DeviceProfile::GARMIN_VIVO_FIT,
            DeviceProfile::GARMIN_VIVO_FIT_2,
            DeviceProfile::GARMIN_VIVO_FIT_3,
            DeviceProfile::GARMIN_VIVO_FIT_4,
            DeviceProfile::GARMIN_VIVO_FIT_JR,
            DeviceProfile::GARMIN_VIVO_FIT_JR_2,
            DeviceProfile::GARMIN_VIVO_SMART,
            DeviceProfile::GARMIN_VIVO_SMART_4,
            DeviceProfile::GARMIN_VIVO_SMART_GPS_H_R,
            DeviceProfile::GARMIN_VIVO_SMART_H_R,
            DeviceProfile::GARMIN_VIVO_SPORT,
            DeviceProfile::GARMIN_TACTIX_CHARLIE,
            DeviceProfile::GARMIN_TACTIX_DELTA,
            DeviceProfile::GARMIN_FORERUNNER_110,
            DeviceProfile::GARMIN_FORERUNNER_165,
            DeviceProfile::GARMIN_FORERUNNER_165_MUSIC,
            DeviceProfile::GARMIN_FORERUNNER_205,
            DeviceProfile::GARMIN_FORERUNNER_210,
            DeviceProfile::GARMIN_FORERUNNER_220,
            DeviceProfile::GARMIN_FORERUNNER_225,
            DeviceProfile::GARMIN_FORERUNNER_230,
            DeviceProfile::GARMIN_FORERUNNER_235,
            DeviceProfile::GARMIN_FORERUNNER_310_X_T,
            DeviceProfile::GARMIN_FORERUNNER_405,
            DeviceProfile::GARMIN_FORERUNNER_410,
            DeviceProfile::GARMIN_FORERUNNER_610,
            DeviceProfile::GARMIN_FORERUNNER_620,
            DeviceProfile::GARMIN_FORERUNNER_630,
            DeviceProfile::GARMIN_D_2_BRAVO,
            DeviceProfile::GARMIN_VIVO_MOVE,
            DeviceProfile::GARMIN_D_2_BRAVO_TITANIUM,
            DeviceProfile::GARMIN_FENIX_6_PRO,
            DeviceProfile::GARMIN_EDGE_205,
            DeviceProfile::GARMIN_EDGE_530,
            DeviceProfile::GARMIN_FIT_ANDROID,
            DeviceProfile::GARMIN_FIT_IPHONE,
            DeviceProfile::GARMIN_APPROACH_X_10,
            DeviceProfile::GARMIN_VIVO_SMART_3,
            DeviceProfile::GARMIN_QUATIX_3,
            DeviceProfile::GARMIN_EDGE_130,
            DeviceProfile::GARMIN_VIVO_MOVE_H_R,
            DeviceProfile::GARMIN_VIVO_MOVE_3,
            DeviceProfile::GARMIN_VIVO_LUXE,
            DeviceProfile::GARMIN_VIVO_MOVE_3_S,
            DeviceProfile::GARMIN_VIVO_MOVE_STYLE,
            DeviceProfile::GARMIN_FENIX_6_PRO_SAPPHIRE,
            DeviceProfile::GARMIN_FENIX_6_X_SAPPHIRE,
            DeviceProfile::GARMIN_D_2_CHARLIE,
            DeviceProfile::GARMIN_D_2_DELTA,
            DeviceProfile::GARMIN_VIVO_MOVE_LUXE,
            DeviceProfile::GARMIN_LEGACY_HERO_FIRST_AVENGER,
            DeviceProfile::GARMIN_LEGACY_HERO_CAPTAIN_MARVEL,
            DeviceProfile::GARMIN_LEGACY_HERO_SAGA_DARTH_VADER,
            DeviceProfile::GARMIN_LEGACY_HERO_SAGA_REY,
            DeviceProfile::GARMIN_EDGE_EXPLORE,
            DeviceProfile::GARMIN_ETREX_20_X,
            DeviceProfile::GARMIN_ETREX_30_X,
            DeviceProfile::GARMIN_GPSMAP_66_I,
            DeviceProfile::GARMIN_GPSMAP_64_S,
            DeviceProfile::GARMIN_GPSMAP_64_S_T,
            DeviceProfile::GARMIN_GPSMAP_64,
            DeviceProfile::GARMIN_GPSMAP_66_S,
            DeviceProfile::GARMIN_APPROACH_G_10,
            DeviceProfile::GARMIN_VIVO_SMART_2,
            DeviceProfile::GARMIN_MARQ_EXPEDITION,
            DeviceProfile::GARMIN_EDGE_130_PLUS,
            DeviceProfile::GARMIN_EDGE_1030_PLUS,
            DeviceProfile::GARMIN_VIVO_ACTIVE_3_DAIMLER,
            DeviceProfile::GARMIN_VENU_DAIMLER,
            DeviceProfile::GARMIN_APPROACH_G_80,
            DeviceProfile::GARMIN_APPROACH_Z_80,
            DeviceProfile::GARMIN_FORETREX_101,
            DeviceProfile::GARMIN_FORETREX_201,
            DeviceProfile::GARMIN_FORETREX_301,
            DeviceProfile::GARMIN_FORETREX_401,
            DeviceProfile::GARMIN_FORETREX_501,
            DeviceProfile::GARMIN_FORETREX_601,
            DeviceProfile::GARMIN_FORETREX_701,
            DeviceProfile::GARMIN_FORETREX_801,
            DeviceProfile::GARMIN_GPSMAP_66,
            DeviceProfile::GARMIN_INSTINCT_SOLAR,
            DeviceProfile::GARMIN_VENU_SQ,
            DeviceProfile::GARMIN_FORERUNNER_745,
            DeviceProfile::GARMIN_LILY,
            DeviceProfile::GARMIN_GPSMAP_65_S,
            DeviceProfile::GARMIN_GPSMAP_66_S_R,
            DeviceProfile::GARMIN_GPSMAP_64_S_X,
            DeviceProfile::GARMIN_ETREX_30,
            DeviceProfile::GARMIN_DESCENT_MK_2_I,
            DeviceProfile::GARMIN_MONTANA_700,
            DeviceProfile::GARMIN_MONTANA_700_I,
            DeviceProfile::GARMIN_MONTANA_750_I,
            DeviceProfile::GARMIN_ENDURO,
            DeviceProfile::GARMIN_ENDURO_3,
            DeviceProfile::GARMIN_VENU_2,
            DeviceProfile::GARMIN_VENU_2_PLUS,
            DeviceProfile::GARMIN_VENU_3,
            DeviceProfile::GARMIN_HRM_PRO,
            DeviceProfile::GARMIN_FENIX_6_S_SOLAR,
            DeviceProfile::GARMIN_FENIX_6_S_PRO_SOLAR,
            DeviceProfile::GARMIN_FENIX_6_PRO_SOLAR,
            DeviceProfile::GARMIN_FENIX_7_S_SAPPHIRE_SOLAR,
            DeviceProfile::GARMIN_FENIX_7_SAPPHIRE_SOLAR,
            DeviceProfile::GARMIN_FENIX_7_X_SAPPHIRE_SOLAR,
            DeviceProfile::GARMIN_FENIX_7_S_PRO_SAPPHIRE_SOLAR,
            DeviceProfile::GARMIN_D_2_DELTA_P_X,
            DeviceProfile::GARMIN_DESCENT_MK_2_S,
            DeviceProfile::GARMIN_APPROACH_S_42,
            DeviceProfile::GARMIN_EPIX_2,
            DeviceProfile::GARMIN_D_2_AIR,
            DeviceProfile::GARMIN_VIVO_SMART_5,
            DeviceProfile::GARMIN_DESCENT_G_1,
            DeviceProfile::GARMIN_VIVO_MOVE_SPORT,
            DeviceProfile::GARMIN_INSTINCT_2_S,
            DeviceProfile::GARMIN_EDGE_1040_SOLAR,
            DeviceProfile::GARMIN_FORERUNNER_225_S_MUSIC,
            DeviceProfile::GARMIN_FORERUNNER_225_MUSIC,
            DeviceProfile::GARMIN_FORERUNNER_255,
            DeviceProfile::GARMIN_FORERUNNER_255_S,
            DeviceProfile::GARMIN_FORERUNNER_265,
            DeviceProfile::GARMIN_FORERUNNER_955,
            DeviceProfile::GARMIN_FORERUNNER_955_SOLAR,
            DeviceProfile::GARMIN_FORERUNNER_965,
            DeviceProfile::GARMIN_INSTINCT_2_SOLAR_ONE_PIECE_LUFFY,
            DeviceProfile::GARMIN_D_2_DELTA_S,
            DeviceProfile::GARMIN_FENIX_7_X_SOLAR,
            DeviceProfile::GARMIN_MARQ_GOLFER,
            DeviceProfile::GARMIN_MARQ_GOLFER_2,
            DeviceProfile::GARMIN_VENU_SQ_2,
            DeviceProfile::GARMIN_MARQ_AVIATOR_2,
            DeviceProfile::GARMIN_DESCENT_G_1_SOLAR,
            DeviceProfile::GARMIN_INSTINCT_CROSSOVER_SOLAR_TACTICAL,
            DeviceProfile::GARMIN_EDGE_EXPLORE_2,
            DeviceProfile::GARMIN_FORERUNNER_265_S,
            DeviceProfile::GARMIN_ENDURO_2,
            DeviceProfile::GARMIN_EDGE_540,
            DeviceProfile::GARMIN_EDGE_540_SOLAR,
            DeviceProfile::GARMIN_EDGE_840,
            DeviceProfile::GARMIN_EDGE_840_SOLAR,
            DeviceProfile::GARMIN_D_2_MACH_1,
            DeviceProfile::GARMIN_INSTINCT_CROSSOVER,
            DeviceProfile::GARMIN_GPSMAP_67_I,
            DeviceProfile::GARMIN_INSTINCT_2_X_SOLAR,
            DeviceProfile::GARMIN_ETREX_S_E,
            DeviceProfile::GARMIN_ETREX_10,
            DeviceProfile::GARMIN_ETREX_22_X,
            DeviceProfile::GARMIN_ETREX_32_X,
            DeviceProfile::GARMIN_APPROACH_S_70,
            DeviceProfile::GARMIN_EPIX_PRO,
            DeviceProfile::GARMIN_TACTIX_7_AMOLED,
            DeviceProfile::GARMIN_MARQ_COMMANDER_2_CARBON,
            DeviceProfile::GARMIN_VENU_3_S,
            DeviceProfile::GARMIN_VIVO_MOVE_TREND,
            DeviceProfile::GARMIN_EDGE_1040,
            DeviceProfile::GARMIN_FENIX_7_PRO_SOLAR,
            DeviceProfile::GARMIN_EPIX_2_PRO,
            DeviceProfile::GARMIN_D_2_MACH_1_PRO,
            DeviceProfile::GARMIN_DESCENT_MK_3_I,
            DeviceProfile::GARMIN_FENIX_6_S_PRO_DUAL_POWER,
            DeviceProfile::GARMIN_APPROACH_S_12,
            DeviceProfile::GARMIN_EDGE_1050,
            DeviceProfile::GARMIN_LILY_2,
            DeviceProfile::GARMIN_LILY_2_ACTIVE,
            DeviceProfile::GARMIN_ETREX_SOLAR,
            DeviceProfile::GARMIN_INSTINCT_E,
            DeviceProfile::GARMIN_INSTINCT_3_SOLAR,
            DeviceProfile::GARMIN_INSTINCT_3_AMOLED,
            DeviceProfile::GARMIN_VENU_2_S_MERCEDES_BENZ,
        ];
    }
}
