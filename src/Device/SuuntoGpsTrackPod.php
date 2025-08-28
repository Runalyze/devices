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

class SuuntoGpsTrackPod extends AbstractDevice
{
    use SuuntoDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::SUUNTO_GPS_TRACK_POD;
    }

    public function getName(): string
    {
        return 'GPS Track POD';
    }

    public function hasBarometer(): bool
    {
        return false;
    }
}
