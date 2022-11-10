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

class CorosApex2Pro extends AbstractDevice
{
    use CorosDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::COROS_APEX_2_PRO;
    }

    public function getName()
    {
        return 'Apex 2 Pro';
    }

    public function hasBarometer()
    {
        return true;
    }
}
