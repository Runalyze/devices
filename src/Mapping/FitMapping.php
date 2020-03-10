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

class FitMapping
{
    public static function guessDevice($manufactorId, $productId)
    {
        switch ($manufactorId) {
            case 1:
                return self::getGarminDevice($productId);
                break;
            case 23:
                return self::getSuuntoDevice($productId);
                break;
            case 294:
                return self::getCorosDevice($productId);
                break;
            case 32:
                return self::getWahooDevice($productId);
            case 38:
                return self::getOsynceDevice($productId);
            default:
                return null;
        }
    }

    public function getGarminDevice($productId)
    {
        $garmin = new GarminFitSdkMapping();

        return $garmin->toInternal($productId);
    }

    public function getCorosDevice($productId)
    {
        $coros = new CorosFitSdkMapping();

        return $coros->toInternal($productId);
    }

    public function getSuuntoDevice($productId)
    {
        $suunto = new SuuntoFitSdkMapping();

        return $suunto->toInternal($productId);
    }

    public function getWahooDevice($productId)
    {
        $wahoo = new WahooFitSdkMapping();

        return $wahoo->toInternal($productId);
    }

    public function getOsynceDevice($productId)
    {
        $osynce = new OsynceFitSdkMapping();

        return $osynce->toInternal($productId);
    }
}
