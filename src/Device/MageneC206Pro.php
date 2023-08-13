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

class MageneC206Pro extends AbstractDevice
{
    use MageneDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::MAGENE_C_206_PRO;
    }

    public function getName(): string
    {
        return 'C206 PRO';
    }
}
