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
            'the sufferfest training system' => DeviceProfile::APP_THE_SUFFERFEST,
            'garmin connect' => DeviceProfile::APP_GARMIN_CONNECT,
            'outdooractive' => DeviceProfile::APP_OUTDOOR_ACTIVE,
            'polar vantage m' => DeviceProfile::POLAR_VANTAGE_M,
            'polar vantage v' => DeviceProfile::POLAR_VANTAGE_V,
            'polar a370' => DeviceProfile::POLAR_A_370,
            'polar m200' => DeviceProfile::POLAR_M_200,
            'polar m400' => DeviceProfile::POLAR_M_400,
            'polar m430' => DeviceProfile::POLAR_M_430,
            'polar m450' => DeviceProfile::POLAR_M_450,
            'polar m460' => DeviceProfile::POLAR_M_460,
            'polar m600' => DeviceProfile::POLAR_M_600,
            'polar v650' => DeviceProfile::POLAR_V_650,
            'polar v800' => DeviceProfile::POLAR_V_800,
            'polar ignite' => DeviceProfile::POLAR_IGNITE,
            'fitbit ionic' => DeviceProfile::FITBIT_IONIC,
            'fitbit surge' => DeviceProfile::FITBIT_SURGE,
            'fitbit versa' => DeviceProfile::FITBIT_VERSA,
            'fitbit charge 2' => DeviceProfile::FITBIT_CHARGE_2,
            'fēnix 3' => DeviceProfile::GARMIN_FENIX_3,
            'fēnix 3 hr' => DeviceProfile::GARMIN_FENIX_3_H_R,
            'forerunner 235' => DeviceProfile::GARMIN_FORERUNNER_235,
            'forereunner305' => DeviceProfile::GARMIN_FORERUNNER_305,
            'forereunner 310xt' => DeviceProfile::GARMIN_FORERUNNER_310_X_T,
            'forereunner 405' => DeviceProfile::GARMIN_FORERUNNER_405,
            'forereunner 410' => DeviceProfile::GARMIN_FORERUNNER_410,
            'forereunner 735xt' => DeviceProfile::GARMIN_FORERUNNER_735_X_T,
            'forereunner 935' => DeviceProfile::GARMIN_FORERUNNER_935,
            'forereunner 945' => DeviceProfile::GARMIN_FORERUNNER_945,
            'fenix 6 sapphire' => DeviceProfile::GARMIN_FENIX_6,
            'garmin forereunner 610' => DeviceProfile::GARMIN_FORERUNNER_610,
            'suunto ambit2' => DeviceProfile::SUUNTO_AMBIT_2,
            'suunto ambit2 r' => DeviceProfile::SUUNTO_AMBIT_2_R,
            'suunto ambit2 s' => DeviceProfile::SUUNTO_AMBIT_2_S,
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
