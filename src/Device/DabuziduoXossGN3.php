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

class DabuziduoXossGN3 extends AbstractDevice
{
    use DabuziduoDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::DABUZIDUO_XOSS_G_N_3;
    }

    public function getName()
    {
        return 'XOSS G N3';
    }

    public function hasBarometer()
    {
        return true;
    }
}
