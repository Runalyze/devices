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

class OsynceNavi2Move extends AbstractDevice
{
    use OsynceDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::OSYNCE_NAVI_2_MOVE;
    }

    public function getName(): string
    {
        return 'navi2move';
    }
}
