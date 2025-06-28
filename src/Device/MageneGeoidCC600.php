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

class MageneGeoidCC600 extends AbstractDevice
{
    use MageneDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::MAGENE_GEOID_C_C_600;
    }

    public function getName(): string
    {
        return 'GEOID CC600';
    }
}
