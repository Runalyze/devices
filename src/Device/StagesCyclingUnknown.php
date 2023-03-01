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

class StagesCyclingUnknown extends AbstractDevice
{
    use StagesCyclingDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::STAGES_CYCLING_UNKNOWN;
    }

    public function getName(): string
    {
        return '';
    }
}
