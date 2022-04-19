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

class SuuntoZoopNovo extends AbstractDevice
{
    use SuuntoDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::SUUNTO_ZOOP_NOVO;
    }

    public function getName()
    {
        return 'Zoop Novo';
    }
}
