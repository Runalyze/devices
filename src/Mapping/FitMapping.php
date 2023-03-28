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

class FitMapping
{
    public static function guessDevice($manufactorId, $productId)
    {
        switch ($manufactorId) {
            case 1:
                return (new GarminFitSdkMapping())->toInternal($productId);
                break;
            case 23:
                return (new SuuntoFitSdkMapping())->toInternal($productId);
                break;
            case 294:
                return (new CorosFitSdkMapping())->toInternal($productId);
                break;
            case 289:
                return (new HammerheadFitSdkMapping())->toInternal($productId);
                break;
            case 32:
                return (new WahooFitSdkMapping())->toInternal($productId);
                break;
            case 38:
                return (new OsynceFitSdkMapping())->toInternal($productId);
                break;
            case 255:
                return (new DevelopmentFitSdkMapping())->toInternal($productId);
                break;
            case 267:
                return DeviceProfile::BRYTON_UNKNOWN;
                break;
            case 70:
                return (new SigmaSportFitSdkMapping())->toInternal($productId);
                break;
            case 71:
                return (new TomTomFitSdkMapping())->toInternal($productId);
                break;
            case 95:
                return DeviceProfile::STRYD_UNKNOWN;
                break;
            case 54:
                return DeviceProfile::APP_IP_BIKE;
                break;
            case 69:
                return DeviceProfile::STAGES_CYCLING_UNKNOWN;
                break;
            case 40:
                return DeviceProfile::CONCEPT_2_UNKNOWN;
                break;
            case 67:
                return DeviceProfile::APP_BKOOL;
                break;
            case 63:
                return (new SpecializedFitSdkMapping())->toInternal($productId);
                break;
            case 260:
                return DeviceProfile::APP_ZWIFT;
                break;
            case 282:
                return DeviceProfile::APP_THE_SUFFERFEST;
                break;
            case 281:
                return DeviceProfile::APP_TRAINER_ROAD;
                break;
            case 115:
                return DeviceProfile::IGPSPORT_UNKNOWN;
                break;
            case 258:
                return DeviceProfile::LEZYNE_UNKNOWN;
                break;
            case 256:
                return DeviceProfile::APP_STRAVA;
                break;
            case 505:
                return DeviceProfile::MIO_UNKNOWN;
                break;
            case 135:
                return (new CoopsoFitSdkMapping())->toInternal($productId);
            case 123:
                return (new PolarFitSdkMapping())->toInternal($productId);
                break;
            case 292:
                return (new DabuziduoFitSdkMapping())->toInternal($productId);
                break;
            case 106:
                return (new FitcareFitSdkMapping())->toInternal($productId);
                break;
            case 132:
                return (new CycplusFitSdkMapping())->toInternal($productId);
                break;
            case 309:
                return DeviceProfile::FORM_SMART_SWIM_GOGGLES;
                break;
            case 73:
                return (new WattbikeFitSdkMapping())->toInternal($productId);
                break;
            case 16:
                return (new TimexFitSdkMapping())->toInternal($productId);
                break;
            default:
                return null;
        }
    }
}
