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

class AmazfitGTR extends AbstractDevice
{
    use AmazfitDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::AMAZFIT_GTR;
    }

    public function getName()
    {
        return 'GTR';
    }
}
