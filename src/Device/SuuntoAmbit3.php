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

class SuuntoAmbit3 extends AbstractDevice
{
    use SuuntoDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::SUUNTO_AMBIT_3_RUN;
    }

    public function getName()
    {
        return 'Ambit 3';
    }
}
