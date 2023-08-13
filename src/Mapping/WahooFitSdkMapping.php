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

class WahooFitSdkMapping
{
    /** @var int[]|string[] */
    protected $Mapping = [];

    protected function getMapping()
    {
        return [
            0 => DeviceProfile::WAHOO_UNKNOWN,
            8 => DeviceProfile::WAHOO_TICKR,
            28 => DeviceProfile::WAHOO_ELEMNT,
            33 => DeviceProfile::WAHOO_ELEMNT_RIVAL,
            43 => DeviceProfile::WAHOO_ELEMNT_BOLT,
            47 => DeviceProfile::WAHOO_ELEMNT_ROAM,
            31 => DeviceProfile::WAHOO_ELEMNT_BOLT,
            37 => DeviceProfile::WAHOO_ELEMNT_ROAM,
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
