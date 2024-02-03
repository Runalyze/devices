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

class MageneFitSdkMapping
{
    /** @var int[]|string[] */
    protected $Mapping = [];

    protected function getMapping()
    {
        return [
            //22 - unknown
            96 => DeviceProfile::MAGENE_C_406,
            98 => DeviceProfile::MAGENE_C_406_PRO,
            99 => DeviceProfile::MAGENE_C_406_LITE,
            100 => DeviceProfile::MAGENE_C_206_PRO,
            102 => DeviceProfile::MAGENE_C_206,
            262 => DeviceProfile::MAGENE_C_606,
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
