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

class TomTomRunner2Music extends AbstractDevice
{
    use TomTomDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::TOM_TOM_RUNNER_2_MUSIC;
    }

    public function getName(): string
    {
        return 'Runner 2 Music';
    }
}
