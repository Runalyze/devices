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

use Runalyze\Devices\Distributor\DistributorInterface;
use Runalyze\Devices\Distributor\DistributorProfile;

abstract class AbstractDevice implements DeviceInterface
{
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->getEnum(),
            'name' => $this->getName(),
            'distributor_id' => $this->getDistributorEnum(),
            'distributor' => $this->getDistributor()->getName(),
            'full_name' => $this->getFullName(),
            'barometer' => $this->hasBarometer(),
        ];
    }

    public function getFullName(): string
    {
        return $this->getDistributor()->getName().' '.$this->getName();
    }

    public function getDistributor(): DistributorInterface
    {
        return DistributorProfile::get($this->getDistributorEnum());
    }

    public function hasBarometer(): bool
    {
        return false;
    }

    public function getNameOfClass(): string
    {
        return static::class;
    }
}
