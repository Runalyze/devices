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

class NameMapping
{
    /** @var int[]|string[] */
    protected $Mapping = [];

    /**
     * @return array
     */
    protected function getMapping()
    {
        return [
            'neorun' => DeviceProfile::APP_EPSON_NEO_RUN,
            'kompass' => DeviceProfile::APP_KOMPASS,
            'runtastic' => DeviceProfile::APP_RUNTASTIC,
            'smashrun' => DeviceProfile::APP_SMASHRUN,
            'trails' => DeviceProfile::APP_TRAILS,
            'sports tracker' => DeviceProfile::APP_SPORTS_TRACKER,
            'runkeeper' => DeviceProfile::APP_RUNKEEPER,
            'runmeter' => DeviceProfile::APP_RUNMETER,
            'decathlon' => DeviceProfile::APP_DECATHLON_COACH,
            'endomondo' => DeviceProfile::APP_ENDOMONDO,
            'ismoothrun' => DeviceProfile::APP_I_SMOOTH_RUN,
            'strava' => DeviceProfile::APP_STRAVA,
            'trailrunner' => DeviceProfile::APP_TRAIL_RUNNER,
            'run.gps' => DeviceProfile::APP_RUN_GPS_TRAINER,
            'osmand' => DeviceProfile::APP_OSM_AND,
            'locus map' => DeviceProfile::APP_LOCUS_MAP,
            'endomondo' => DeviceProfile::APP_ENDOMONDO,
            'polar flow' => DeviceProfile::APP_POLAR_FLOW,
            'sportractive' => DeviceProfile::APP_SPORTRACTIVE,
            'oruxmaps' => DeviceProfile::APP_ORUX_MAPS,
            'komoot' => DeviceProfile::APP_KOMOOT,
            'navime' => DeviceProfile::APP_NAVIME,
            'http://www.polarpersonaltrainer.com' => DeviceProfile::APP_POLAR_PERSONAL_TRAINER,
            'a-rival' => DeviceProfile::ARIVAL_UNKNOWN,
            'rungap' => DeviceProfile::APP_RUN_GAP,
            'globalsat' => DeviceProfile::APP_GLOBAL_SAT,
            'garmin connect' => DeviceProfile::APP_GARMIN_CONNECT,
            'outdooractive' => DeviceProfile::APP_OUTDOOR_ACTIVE,
            'Polar Vantage M' => DeviceProfile::POLAR_VANTAGE_M,
            'Polar Vantage V' => DeviceProfile::POLAR_VANTAGE_M,
            'Polar A370' => DeviceProfile::POLAR_A_370,
            'Polar M200' => DeviceProfile::POLAR_M_400,
            'Polar M400' => DeviceProfile::POLAR_M_400,
            'Polar M430' => DeviceProfile::POLAR_M_430,
            'Polar M450' => DeviceProfile::POLAR_M_450,
            'Polar M460' => DeviceProfile::POLAR_M_460,
            'Polar M600' => DeviceProfile::POLAR_M_600,
            'Polar V650' => DeviceProfile::POLAR_V_650,
            'Polar V800' => DeviceProfile::POLAR_V_800,
            'Polar Ignite' => DeviceProfile::POLAR_IGNITE,
            'Fitbit Ionic' => DeviceProfile::FITBIT_IONIC,
            'Fitbit Surge' => DeviceProfile::FITBIT_SURGE,
            'Fitbit Versa' => DeviceProfile::FITBIT_VERSA,
            'Fitbit Charge 2' => DeviceProfile::FITBIT_CHARGE_2,
            'fēnix 3' => DeviceProfile::GARMIN_FENIX_3,
            'fēnix 3 HR' => DeviceProfile::GARMIN_FENIX_3_H_R,
            'Forerunner 235' => DeviceProfile::GARMIN_FORERUNNER_235,
            'Forerunner305' => DeviceProfile::GARMIN_FORERUNNER_305,
            'Forerunner 310XT' => DeviceProfile::GARMIN_FORERUNNER_310_X_T,
            'Forerunner 405' => DeviceProfile::GARMIN_FORERUNNER_405,
            'Forerunner 410' => DeviceProfile::GARMIN_FORERUNNER_410,
            'Forerunner 735XT' => DeviceProfile::GARMIN_FORERUNNER_735_X_T,
            'Forerunner 935' => DeviceProfile::GARMIN_FORERUNNER_935,
            'Forerunner 945' => DeviceProfile::GARMIN_FORERUNNER_945,
            'Garmin Forerunner 610' => DeviceProfile::GARMIN_FORERUNNER_610,
            'Suunto Ambit2' => DeviceProfile::SUUNTO_AMBIT_2,
            'Suunto Ambit2 R' => DeviceProfile::SUUNTO_AMBIT_2_R,
            'Suunto Ambit2 S' => DeviceProfile::SUUNTO_AMBIT_2_S,
        ];
    }

    public function __construct()
    {
        $this->Mapping = $this->getMapping();
    }

    /**
     * @param  int|string $creator
     * @return int|string
     */
    public function toInternal($creator)
    {
        foreach ($this->Mapping as $startsWith => $id) {
            if (strtolower(substr($creator, 0, strlen($startsWith))) === $startsWith) {
                return $id;
            }
        }

        return;
    }
}
