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

class CoopsoBC107 extends AbstractDevice
{
    use CoopsoDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::COOPSO_B_C_107;
    }

    public function getName()
    {
        return 'BC107';
    }
}
