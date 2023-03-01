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
            DeviceProfile::GARMIN_FORERUNNER_10,
            DeviceProfile::GARMIN_FORERUNNER_15,
            DeviceProfile::GARMIN_FORERUNNER_25,
            DeviceProfile::GARMIN_FORERUNNER_30,
            DeviceProfile::GARMIN_FORERUNNER_35,
            DeviceProfile::GARMIN_FORERUNNER_45,
            DeviceProfile::GARMIN_FORERUNNER_45_S,
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
        ];
    }
}
