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

class TomTomSpark3 extends AbstractDevice
{
    use TomTomDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::TOM_TOM_SPARK_3;
    }

    public function getName()
    {
        return 'Spark 3';
    }
}
