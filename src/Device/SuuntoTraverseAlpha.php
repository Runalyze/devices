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

class SuuntoTraverseAlpha extends AbstractDevice
{
    use SuuntoDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::SUUNTO_TRAVERSE_ALPHA;
    }

    public function getName()
    {
        return 'Traverse Alpha';
    }

    public function hasBarometer()
    {
        return true;
    }
}
