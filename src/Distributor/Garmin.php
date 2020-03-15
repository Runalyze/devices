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
    public function getEnum()
    {
        return DistributorProfile::GARMIN;
    }

    public function getName()
    {
        return 'Garmin';
    }

    public function getDeviceEnumList()
    {
        return [
            DeviceProfile::GARMIN_UNKNOWN,
            DeviceProfile::GARMIN_FORERUNNER_10,
            DeviceProfile::GARMIN_FORERUNNER_15,
            DeviceProfile::GARMIN_FORERUNNER_25,
            DeviceProfile::GARMIN_FORERUNNER_30,
            DeviceProfile::GARMIN_FORERUNNER_35,
            DeviceProfile::GARMIN_FORERUNNER_50,
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
            DeviceProfile::GARMIN_FORERUNNER_945,
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
            DeviceProfile::GARMIN_EDGE_EXPLORE_820,
            DeviceProfile::GARMIN_EDGE_1000,
            DeviceProfile::GARMIN_EDGE_1030,
            DeviceProfile::GARMIN_EDGE_EXPLORE_1000,
            DeviceProfile::GARMIN_VENU,
            DeviceProfile::GARMIN_VIVO_FIT,
            DeviceProfile::GARMIN_VIVO_FIT_2,
            DeviceProfile::GARMIN_VIVO_FIT_3,
            DeviceProfile::GARMIN_VIVO_FIT_4,
            DeviceProfile::GARMIN_VIVO_FIT_JR,
            DeviceProfile::GARMIN_VIVO_FIT_JR_2,
            DeviceProfile::GARMIN_VIVO_ACTIVE,
            DeviceProfile::GARMIN_VIVO_ACTIVE_3,
            DeviceProfile::GARMIN_VIVO_ACTIVE_3_MUSIC,
            DeviceProfile::GARMIN_VIVO_ACTIVE_4,
            DeviceProfile::GARMIN_VIVO_ACTIVE_4_S,
            DeviceProfile::GARMIN_VIVO_ACTIVE_H_R,
            DeviceProfile::GARMIN_MARQ_ADVENTURER,
            DeviceProfile::GARMIN_MARQ_ATHLETE,
            DeviceProfile::GARMIN_MARQ_AVIATOR,
            DeviceProfile::GARMIN_MARQ_CAPTAIN,
            DeviceProfile::GARMIN_MARQ_DRIVER,
            DeviceProfile::GARMIN_MARQ_COMMANDER,
        ];
    }
}
