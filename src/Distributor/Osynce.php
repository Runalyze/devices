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

class Osynce extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::OSYNCE;
    }

    public function getName(): string
    {
        return 'o-synce';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::OSYNCE_MIX_FREE,
            DeviceProfile::OSYNCE_MIX_PRO,
            DeviceProfile::OSYNCE_NAVI_2_COACH,
            DeviceProfile::OSYNCE_NAVI_2_MOVE,
            DeviceProfile::OSYNCE_UNKNOWN,
        ];
    }
}
