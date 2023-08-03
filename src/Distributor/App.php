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

class App extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::APP;
    }

    public function getName(): string
    {
        return '';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::APP_DECATHLON_COACH,
            DeviceProfile::APP_ENDOMONDO,
            DeviceProfile::APP_EPSON_NEO_RUN,
            DeviceProfile::APP_GARMIN_CONNECT,
            DeviceProfile::APP_GARMIN_TRAINING_CENTER,
            DeviceProfile::APP_GLOBAL_SAT,
            DeviceProfile::APP_GPSIES,
            DeviceProfile::APP_GPS_MASTER,
            DeviceProfile::APP_I_SMOOTH_RUN,
            DeviceProfile::APP_KOMOOT,
            DeviceProfile::APP_KOMPASS,
            DeviceProfile::APP_KOMOOT,
            DeviceProfile::APP_LOCUS_MAP,
            DeviceProfile::APP_MOTI_FIT,
            DeviceProfile::APP_MOVESCOUNT,
            DeviceProfile::APP_NAVIME,
            DeviceProfile::APP_ORUX_MAPS,
            DeviceProfile::APP_OSM_AND,
            DeviceProfile::APP_OUTDOOR_ACTIVE,
            DeviceProfile::APP_POLAR_FLOW,
            DeviceProfile::APP_POLAR_PERSONAL_TRAINER,
            DeviceProfile::APP_RUN_GAP,
            DeviceProfile::APP_RUN_GPS_TRAINER,
            DeviceProfile::APP_RUNKEEPER,
            DeviceProfile::APP_RUNMETER,
            DeviceProfile::APP_RUNNERUP,
            DeviceProfile::APP_RUNTASTIC,
            DeviceProfile::APP_SMASHRUN,
            DeviceProfile::APP_SPORTRACTIVE,
            DeviceProfile::APP_SPORTS_TRACKER,
            DeviceProfile::APP_STRAVA,
            DeviceProfile::APP_THE_SUFFERFEST,
            DeviceProfile::APP_TRAIL_RUNNER,
            DeviceProfile::APP_TRAILS,
            DeviceProfile::APP_FITNESS_SYNCER,
            DeviceProfile::APP_SPORT_TRACKS,
            DeviceProfile::APP_ZWIFT,
            DeviceProfile::APP_IP_BIKE,
            DeviceProfile::APP_TRAINER_ROAD,
            DeviceProfile::APP_BKOOL,
            DeviceProfile::APP_NIKE_RUN_CLUB,
            DeviceProfile::APP_RELIVE,
            DeviceProfile::APP_ALLTRAILS,
            DeviceProfile::APP_FITO_TRACK,
            DeviceProfile::APP_KINOMAP,
            DeviceProfile::APP_OPENTRACKS,
            DeviceProfile::APP_ROAD_GRANT_TOURS,
            DeviceProfile::APP_GHOSTRACER,
            DeviceProfile::APP_POLAR_BEAT,
            DeviceProfile::APP_GOLDEN_CHEETAH,
            DeviceProfile::APP_XERT,
            DeviceProfile::APP_TACX,
            DeviceProfile::APP_ROUVY,
        ];
    }
}
