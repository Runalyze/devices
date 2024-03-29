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

class GarminLegacyHeroSagaDarthVader extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_LEGACY_HERO_SAGA_DARTH_VADER;
    }

    public function getName(): string
    {
        return 'Legcay Hero Saga - Darth Vader';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
