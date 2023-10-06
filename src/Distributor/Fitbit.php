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

class Fitbit extends AbstractDistributor
{
    public function getEnum(): int
    {
        return DistributorProfile::FITBIT;
    }

    public function getName(): string
    {
        return 'Fitbit';
    }

    public function getDeviceEnumList(): array
    {
        return [
            DeviceProfile::FITBIT_ACE,
            DeviceProfile::FITBIT_ALTA,
            DeviceProfile::FITBIT_ALTA_H_R,
            DeviceProfile::FITBIT_BLAZE,
            DeviceProfile::FITBIT_CHARGE,
            DeviceProfile::FITBIT_CHARGE_2,
            DeviceProfile::FITBIT_CHARGE_3,
            DeviceProfile::FITBIT_CHARGE_4,
            DeviceProfile::FITBIT_CHARGE_5,
            DeviceProfile::FITBIT_CHARGE_6,
            DeviceProfile::FITBIT_CHARGE_H_R,
            DeviceProfile::FITBIT_FLEX,
            DeviceProfile::FITBIT_FLEX_2,
            DeviceProfile::FITBIT_FORCE,
            DeviceProfile::FITBIT_IONIC,
            DeviceProfile::FITBIT_ONE,
            DeviceProfile::FITBIT_SURGE,
            DeviceProfile::FITBIT_ULTRA,
            DeviceProfile::FITBIT_VERSA,
            DeviceProfile::FITBIT_VERSA_3,
            DeviceProfile::FITBIT_VERSA_4,
            DeviceProfile::FITBIT_SENSE,
            DeviceProfile::FITBIT_ZIP,
            DeviceProfile::FITBIT_UNKNOWN,
        ];
    }
}
