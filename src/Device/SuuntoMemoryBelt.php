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

class SuuntoMemoryBelt extends AbstractDevice
{
    use SuuntoDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::SUUNTO_MEMORY_BELT;
    }

    public function getName(): string
    {
        return 'Memory Belt';
    }
}
