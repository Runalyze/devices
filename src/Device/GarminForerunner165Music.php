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

class GarminForerunner165Music extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_FORERUNNER_165_MUSIC;
    }

    public function getName(): string
    {
        return 'Forerunner 165';
    }

    public function hasBarometer(): bool
    {
        return true;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return new \DateTimeImmutable('2024-02-20');
    }
}
