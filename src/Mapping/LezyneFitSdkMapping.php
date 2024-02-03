<?php

/*
 * This file is part of the Runalyze Device List.
 *
 * (c) RUNALYZE <mail@runalyze.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Runalyze\Devices\Mapping;

use Runalyze\Devices\Device\DeviceProfile;

class LezyneFitSdkMapping
{
    /** @var int[]|string[] */
    protected $Mapping = [];

    protected function getMapping()
    {
        return [
            4 => DeviceProfile::LEZYNE_SUPER_GPS,
            5 => DeviceProfile::LEZYNE_MACRO_GPS,
            7 => DeviceProfile::LEZYNE_MICRO_C_GPS,
            11 => DeviceProfile::LEZYNE_MEGA_GPS,
            12 => DeviceProfile::LEZYNE_MEGA_C_GPS,
            13 => DeviceProfile::LEZYNE_SUPER_PRO_GPS,
            68 => DeviceProfile::LEZYNE_MICRO_W_GPS,
        ];
    }

    public function __construct()
    {
        $this->Mapping = $this->getMapping();
    }

    /**
     * @param  int|string $value
     * @return int|string
     */
    public function toInternal($value)
    {
        if (isset($this->Mapping[$value])) {
            return $this->Mapping[$value];
        }

        return;
    }
}
