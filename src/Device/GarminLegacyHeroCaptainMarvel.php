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

class GarminLegacyHeroCaptainMarvel extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_LEGACY_HERO_CAPTAIN_MARVEL;
    }

    public function getName()
    {
        return 'Legcay Hero - Captain Marvel';
    }
}
