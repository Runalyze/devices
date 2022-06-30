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

class GarminLegacySagaRey extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_LEGACY_SAGA_REY;
    }

    public function getName()
    {
        return 'Legcay Saga - Rey';
    }

    public function hasBarometer()
    {
        return true;
    }
}
