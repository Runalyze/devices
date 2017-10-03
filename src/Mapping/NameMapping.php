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

        return null;
    }
}
