<?php

/*
 * This file is part of the Runalyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Runalyze\Devices\Device;

class GarminInstinctCrossover extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_INSTINCT_CROSSOVER;
    }

    public function getName()
    {
        return 'Instinct Crossover';
    }

    public function hasBarometer()
    {
        return true;
    }
}
