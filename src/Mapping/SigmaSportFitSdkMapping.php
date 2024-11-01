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

class SigmaSportFitSdkMapping
{
    /** @var int[]|string[] */
    protected $Mapping = [];

    protected function getMapping()
    {
        return [
            15 => DeviceProfile::SIGMA_SPORT_ROX_100_GPS,
            18 => DeviceProfile::SIGMA_SPORT_ROX_70_GPS,
            41 => DeviceProfile::SIGMA_SPORT_ROX_110_GPS,
            44 => DeviceProfile::SIGMA_SPORT_ROX_120_SPORT,
            46 => DeviceProfile::SIGMA_SPORT_ID_TRI,
            49 => DeviceProfile::SIGMA_SPORT_ROX_111_EVO,
            52 => DeviceProfile::SIGMA_SPORT_ROX_40,
            54 => DeviceProfile::SIGMA_SPORT_ROX_121_EVO,
        ];
        /*
         * Unknown:
         * 46
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
