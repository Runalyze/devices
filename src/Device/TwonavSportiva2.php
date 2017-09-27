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

class TwonavSportiva2 extends AbstractDevice
{
    use TwonavDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::TWONAV_SPORTIVA_2;
    }

    public function getName()
    {
        return 'Sportiva 2';
    }
}
