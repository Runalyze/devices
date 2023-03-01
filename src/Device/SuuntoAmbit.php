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

class SuuntoAmbit extends AbstractDevice
{
    use SuuntoDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::SUUNTO_AMBIT;
    }

    public function getName(): string
    {
        return 'Ambit';
    }

    public function hasBarometer(): bool
    {
        return true;
    }
}
