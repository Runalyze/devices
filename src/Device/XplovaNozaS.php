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

class XplovaNozaS extends AbstractDevice
{
    use XplovaDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::XPLOVA_NOZA_S;
    }

    public function getName(): string
    {
        return 'NOZA S';
    }
}
