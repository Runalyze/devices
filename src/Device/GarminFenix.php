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

class GarminFenix extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::GARMIN_FENIX;
    }

    public function getName(): string
    {
        return 'Fenix';
    }

    public function hasBarometer(): bool
    {
        return true;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return new \DateTimeImmutable('2012-08-01');
    }
}
