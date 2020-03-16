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
                return (new GarminFitSdkMapping())->toInternal($productId);
                break;
            case 23:
                return (new SuuntoFitSdkMapping())->toInternal($productId);
                break;
            case 294:
                return (new CorosFitSdkMapping())->toInternal($productId);
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
            case 70:
                return (new SigmaSportFitSdkMapping())->toInternal($productId);
                break;
            default:
                return null;
        }
    }
}
