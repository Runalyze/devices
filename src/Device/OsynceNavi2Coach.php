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

class OsynceNavi2Coach extends AbstractDevice
{
    use OsynceDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::OSYNCE_NAVI_2_COACH;
    }

    public function getName()
    {
        return 'navi2coach';
    }
}
