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
            'apple watch series 6' => DeviceProfile::APPLE_WATCH_6_V_44,
            'apple watch series 5' => DeviceProfile::APPLE_WATCH_5_V_44,
            'apple watch series 4' => DeviceProfile::APPLE_WATCH_4_V_44,
            'apple watch series 3' => DeviceProfile::APPLE_WATCH_3_V_38,
            'apple watch se' => DeviceProfile::APPLE_WATCH_S_E_44,
            'a-rival' => DeviceProfile::ARIVAL_UNKNOWN,
            'bkool' => DeviceProfile::APP_BKOOL,
            'bryton' => DeviceProfile::BRYTON_UNKNOWN,
            'coros apex pro' => DeviceProfile::COROS_APEX_PRO,
            'coros apex' => DeviceProfile::COROS_APEX,
            'coros wearables' => DeviceProfile::COROS_UNKNOWN,
            'decathlon' => DeviceProfile::APP_DECATHLON_COACH,
            'endomondo' => DeviceProfile::APP_ENDOMONDO,
            'epix' => DeviceProfile::GARMIN_EPIX,
            'etrex 30' => DeviceProfile::GARMIN_ETREX_30,
            'etrex 30x' => DeviceProfile::GARMIN_ETREX_30_X,
            'fenix 6 sapphire' => DeviceProfile::GARMIN_FENIX_6,
            'fenix 6' => DeviceProfile::GARMIN_FENIX_6,
            'fitbit blaze' => DeviceProfile::FITBIT_BLAZE,
            'fitbit charge 2' => DeviceProfile::FITBIT_CHARGE_2,
            'fitbit ionic' => DeviceProfile::FITBIT_IONIC,
            'fitbit surge' => DeviceProfile::FITBIT_SURGE,
            'fitbit versa' => DeviceProfile::FITBIT_VERSA,
            'forereunner 25' => DeviceProfile::GARMIN_FORERUNNER_25,
            'forereunner 30' => DeviceProfile::GARMIN_FORERUNNER_30,
            'forereunner 35' => DeviceProfile::GARMIN_FORERUNNER_35,
            'forereunner 45' => DeviceProfile::GARMIN_FORERUNNER_45,
            'forereunner 245' => DeviceProfile::GARMIN_FORERUNNER_245,
            'forereunner 245 music' => DeviceProfile::GARMIN_FORERUNNER_245_MUSIC,
            'forereunner 310xt' => DeviceProfile::GARMIN_FORERUNNER_310_X_T,
            'forereunner 405' => DeviceProfile::GARMIN_FORERUNNER_405,
            'forereunner 405cx' => DeviceProfile::GARMIN_FORERUNNER_405_C_X,
            'forereunner 410' => DeviceProfile::GARMIN_FORERUNNER_410,
            'forereunner 735xt' => DeviceProfile::GARMIN_FORERUNNER_735_X_T,
            'forereunner 935' => DeviceProfile::GARMIN_FORERUNNER_935,
            'forereunner 910xt' => DeviceProfile::GARMIN_FORERUNNER_910_X_T,
            'forereunner 945' => DeviceProfile::GARMIN_FORERUNNER_945,
            'forereunner305' => DeviceProfile::GARMIN_FORERUNNER_305,
            'forerunner 235' => DeviceProfile::GARMIN_FORERUNNER_235,
            'forerunner 45' => DeviceProfile::GARMIN_FORERUNNER_45,
            'fr15' => DeviceProfile::GARMIN_FORERUNNER_15,
            'fr735xt' => DeviceProfile::GARMIN_FORERUNNER_735_X_T,
            'fēnix 3 hr' => DeviceProfile::GARMIN_FENIX_3_H_R,
            'fēnix 3' => DeviceProfile::GARMIN_FENIX_3,
            'form goggles' => DeviceProfile::FORM_SMART_SWIM_GOGGLES,
            'garmin connect' => DeviceProfile::APP_GARMIN_CONNECT,
            'garmin edge 520' => DeviceProfile::GARMIN_EDGE_520,
            'garmin edge 530' => DeviceProfile::GARMIN_EDGE_530,
            'garmin edge 705' => DeviceProfile::GARMIN_EDGE_705,
            'garmin edge 810' => DeviceProfile::GARMIN_EDGE_810,
            'garmin edge 830' => DeviceProfile::GARMIN_EDGE_830,
            'garmin edge 1030' => DeviceProfile::GARMIN_EDGE_1030,
            'garmin edge 1030 plus' => DeviceProfile::GARMIN_EDGE_1030_PLUS,
            'garmin forereunner 610' => DeviceProfile::GARMIN_FORERUNNER_610,
            'garmin forerunner 245' => DeviceProfile::GARMIN_FORERUNNER_245,
            'garmin forerunner 645' => DeviceProfile::GARMIN_FORERUNNER_645,
            'garmin forerunner 735xt' => DeviceProfile::GARMIN_FORERUNNER_735_X_T,
            'garmin forerunner 745' => DeviceProfile::GARMIN_FORERUNNER_745,
            'garmin forerunner 910xt' => DeviceProfile::GARMIN_FORERUNNER_910_X_T,
            'garmin forerunner 935' => DeviceProfile::GARMIN_FORERUNNER_935,
            'forerunner 945' => DeviceProfile::GARMIN_FORERUNNER_945,
            'garmin fēnix 6 pro' => DeviceProfile::GARMIN_FENIX_6_PRO,
            'garmin venu sq' => DeviceProfile::GARMIN_VENU_SQ,
            'ghostracer' => DeviceProfile::APP_GHOSTRACER,
            'globalsat' => DeviceProfile::APP_GLOBAL_SAT,
            'goldencheetah' => DeviceProfile::APP_GOLDEN_CHEETAH,
            'gpsmap 64s' => DeviceProfile::GARMIN_GPSMAP_64_S,
            'gpsmap 64st' => DeviceProfile::GARMIN_GPSMAP_64_S_T,
            'gpsmap 65s' => DeviceProfile::GARMIN_GPSMAP_65_S,
            'gpsmap 66S' => DeviceProfile::GARMIN_GPSMAP_66_S,
            'gpsmap 66i' => DeviceProfile::GARMIN_GPSMAP_66_I,
            'gpsmap 66sr' => DeviceProfile::GARMIN_GPSMAP_66_S_R,
            'gpsmap66' => DeviceProfile::GARMIN_GPSMAP_66,
            'http://www.polarpersonaltrainer.com' => DeviceProfile::APP_POLAR_PERSONAL_TRAINER,
            'huami amazfit pace' => DeviceProfile::HUAMI_AMAZFIT_PACE,
            'huami amazfit gts 2' => DeviceProfile::HUAMI_AMAZFIT_G_T_S,
            'huami amazfit gtr 2e' => DeviceProfile::HUAMI_AMAZFIT_G_T_R_2,
            'huami amazfit stratos' => DeviceProfile::HUAMI_AMAZFIT_STRATOS,
            'huami amazfit stratos 2' => DeviceProfile::HUAMI_AMAZFIT_STRATOS_2,
            'huami amazfit stratos 3' => DeviceProfile::HUAMI_AMAZFIT_STRATOS_3,
            'ismoothrun' => DeviceProfile::APP_I_SMOOTH_RUN,
            'komoot' => DeviceProfile::APP_KOMOOT,
            'kompass' => DeviceProfile::APP_KOMPASS,
            'locus map' => DeviceProfile::APP_LOCUS_MAP,
            'navime' => DeviceProfile::APP_NAVIME,
            'neorun' => DeviceProfile::APP_EPSON_NEO_RUN,
            'oregon 600' => DeviceProfile::GARMIN_OREGON_600,
            'oregon 700' => DeviceProfile::GARMIN_OREGON_700,
            'oruxmaps' => DeviceProfile::APP_ORUX_MAPS,
            'osmand' => DeviceProfile::APP_OSM_AND,
            'outdooractive' => DeviceProfile::APP_OUTDOOR_ACTIVE,
            'igsport igs620' => DeviceProfile::IGPSPORT_IGS_620,
            'igsport igs618' => DeviceProfile::IGPSPORT_IGS_618,
            'igsport igs50e' => DeviceProfile::IGPSPORT_IGS_50_E,
            'polar a370' => DeviceProfile::POLAR_A_370,
            'polar beat' => DeviceProfile::APP_POLAR_BEAT,
            'polar flow' => DeviceProfile::APP_POLAR_FLOW,
            'polar grit x pro' => DeviceProfile::POLAR_GRIT_X_PRO,
            'polar grit x' => DeviceProfile::POLAR_GRIT_X,
            'polar ignite' => DeviceProfile::POLAR_IGNITE,
            'polar pacer pro' => DeviceProfile::POLAR_PACER_PRO,
            'polar pacer' => DeviceProfile::POLAR_PACER,
            'polar m200' => DeviceProfile::POLAR_M_200,
            'polar m400' => DeviceProfile::POLAR_M_400,
            'polar m430' => DeviceProfile::POLAR_M_430,
            'polar m450' => DeviceProfile::POLAR_M_450,
            'polar m460' => DeviceProfile::POLAR_M_460,
            'polar m600' => DeviceProfile::POLAR_M_600,
            'polar unite' => DeviceProfile::POLAR_UNITE,
            'polar v650' => DeviceProfile::POLAR_V_650,
            'polar v800' => DeviceProfile::POLAR_V_800,
            'polar vantage m' => DeviceProfile::POLAR_VANTAGE_M,
            'polar vantage v' => DeviceProfile::POLAR_VANTAGE_V,
            'polar vantage v2' => DeviceProfile::POLAR_VANTAGE_V_2,
            'relive' => DeviceProfile::APP_RELIVE,
            'run.gps' => DeviceProfile::APP_RUN_GPS_TRAINER,
            'rungap' => DeviceProfile::APP_RUN_GAP,
            'runkeeper' => DeviceProfile::APP_RUNKEEPER,
            'runmeter' => DeviceProfile::APP_RUNMETER,
            'kinomap' => DeviceProfile::APP_KINOMAP,
            'rouvy' => DeviceProfile::APP_ROUVY,
            'runnerup' => DeviceProfile::APP_RUNNERUP,
            'runtastic' => DeviceProfile::APP_RUNTASTIC,
            'smashrun' => DeviceProfile::APP_SMASHRUN,
            'sportractive' => DeviceProfile::APP_SPORTRACTIVE,
            'sports tracker' => DeviceProfile::APP_SPORTS_TRACKER,
            'strava' => DeviceProfile::APP_STRAVA,
            'stryd' => DeviceProfile::STRYD_UNKNOWN,
            'suunto 7' => DeviceProfile::SUUNTO_7,
            'suunto 9' => DeviceProfile::SUUNTO_9,
            'suunto ambit2 r' => DeviceProfile::SUUNTO_AMBIT_2_R,
            'suunto ambit2 s' => DeviceProfile::SUUNTO_AMBIT_2_S,
            'suunto ambit2' => DeviceProfile::SUUNTO_AMBIT_2,
            'suunto ambit3 peak' => DeviceProfile::SUUNTO_AMBIT_3_PEAK,
            'tacx app' => DeviceProfile::APP_TACX,
            'the sufferfest training system' => DeviceProfile::APP_THE_SUFFERFEST,
            'trailrunner' => DeviceProfile::APP_TRAIL_RUNNER,
            'trails' => DeviceProfile::APP_TRAILS,
            'trainerroad' => DeviceProfile::APP_TRAINER_ROAD,
            'venu 2s' => DeviceProfile::GARMIN_VENU_2,
            'venu sq' => DeviceProfile::GARMIN_VENU_SQ,
            'wahoo elemnt bolt' => DeviceProfile::WAHOO_ELEMNT_BOLT,
            'wahoo elemnt rival' => DeviceProfile::WAHOO_ELEMNT_RIVAL,
            'wahoo elemnt roam' => DeviceProfile::WAHOO_ELEMNT_ROAM,
            'wattbike atom' => DeviceProfile::WATTBIKE_ATOM,
            'xert' => DeviceProfile::APP_XERT,
            'zwift run' => DeviceProfile::APP_ZWIFT,
            'zwift' => DeviceProfile::APP_ZWIFT,
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
