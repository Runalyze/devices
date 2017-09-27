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

abstract class AbstractDistributor implements DistributorInterface
{
    /**
    * @return string
    */
   public function getNameOfClass()
   {
       return static::class;
   }
}
