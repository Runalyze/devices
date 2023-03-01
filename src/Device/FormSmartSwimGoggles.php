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

class FormSmartSwimGoggles extends AbstractDevice
{
    use FormDeviceTrait;

    public function getEnum(): int
    {
        return DeviceProfile::FORM_SMART_SWIM_GOGGLES;
    }

    public function getName(): string
    {
        return 'Smart Swim Goggles';
    }
}
