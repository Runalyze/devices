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

class CorosFitSdkMapping
{
    /** @var int[]|string[] */
    protected $Mapping = [];

    protected function getMapping()
    {
        return [
            801 => DeviceProfile::COROS_PACE,
            802 => DeviceProfile::COROS_PACE_2,
            803 => DeviceProfile::KIPRUN_500,
            804 => DeviceProfile::COROS_PACE_3,
            811 => DeviceProfile::COROS_APEX_42,
            821 => DeviceProfile::COROS_APEX_46,
            831 => DeviceProfile::COROS_VERTIX,
            294 => DeviceProfile::COROS_VERTIX_2,
            832 => DeviceProfile::COROS_VERTIX_2,
            841 => DeviceProfile::COROS_APEX_PRO,
            899 => DeviceProfile::COROS_UNKNOWN,
            812 => DeviceProfile::COROS_APEX_2,
            822 => DeviceProfile::COROS_APEX_2_PRO,
            823 => DeviceProfile::KIPRUN_900,
        ];
        /*
         * Unknown:
         * 899
         */
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
