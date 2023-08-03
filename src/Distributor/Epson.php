<?php

/*
 * This file is part of the Runalyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Runalyze\Devices\Distributor;

use Runalyze\Devices\Device\DeviceProfile;

class Epson extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::EPSON;
    }

    public function getName(): string
    {
        return 'Epson';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::EPSON_S_F_310,
            DeviceProfile::EPSON_S_F_510,
            DeviceProfile::EPSON_S_F_510_F,
            DeviceProfile::EPSON_S_F_710_S,
            DeviceProfile::EPSON_S_F_810,
            DeviceProfile::EPSON_PRO_SENSE_57,
            DeviceProfile::EPSON_PRO_SENSE_307,
            DeviceProfile::EPSON_PRO_SENSE_347,
            DeviceProfile::EPSON_PRO_SENSE_367,
            DeviceProfile::EPSON_PRO_SENSE_17,
            DeviceProfile::EPSON_UNKNOWN,
        ];
    }
}
