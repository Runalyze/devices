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

class WahooElemntBolt extends AbstractDevice
{
    use WahooDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::WAHOO_ELEMNT_BOLT;
    }

    public function getName(): string
    {
        return 'ELEMNT Bolt';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
