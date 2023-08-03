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

interface DeviceInterface extends \JsonSerializable
{
    public function getEnum(): int;

    /**
     * @codeCoverageIgnore
     */
    public function getName(): string;

    /**
     * @codeCoverageIgnore
     */
    public function getFullName(): string;

    public function getDistributorEnum(): int;

    public function getDistributor(): DistributorInterface;

    /**
     * @codeCoverageIgnore
     */
    public function hasBarometer(): bool;

    public function getReleaseDate(): ?\DateTimeInterface;

    public function getSlug(): string;
}
