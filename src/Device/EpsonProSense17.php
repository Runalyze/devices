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

class EpsonProSense17 extends AbstractDevice
{
    use EpsonDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::EPSON_PRO_SENSE_17;
    }

    public function getName()
    {
        return 'ProSense 17';
    }
}
