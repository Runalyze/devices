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

class Kiprun900 extends AbstractDevice
{
    use KiprunDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::KIPRUN_900;
    }

    public function getName()
    {
        return '/Coros GPS 900';
    }
}
