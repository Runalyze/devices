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
                return FitMapping::getGarminDevice($productId);
                break;
            case 23:
                return self::getSuuntoDevice($productId);
                break;
            case 294:
                return self::getCorosDevice($productId);
                break;
            case 32:
                return self::getWahooDevice($productId);
                break;
            case 38:
                return self::getOsynceDevice($productId);
                break;
            default:
                return null;
        }
    }

    public static function getGarminDevice($productId)
    {
        $garmin = new GarminFitSdkMapping();

        return $garmin->toInternal($productId);
    }

    public static function getCorosDevice($productId)
    {
        $coros = new CorosFitSdkMapping();

        return $coros->toInternal($productId);
    }

    public static function getSuuntoDevice($productId)
    {
        $suunto = new SuuntoFitSdkMapping();

        return $suunto->toInternal($productId);
    }

    public static function getWahooDevice($productId)
    {
        $wahoo = new WahooFitSdkMapping();

        return $wahoo->toInternal($productId);
    }

    public static function getOsynceDevice($productId)
    {
        $osynce = new OsynceFitSdkMapping();

        return $osynce->toInternal($productId);
    }
}
