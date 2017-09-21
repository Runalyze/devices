<?php

namespace Runalyze\Devices\Tests\Distributor;

use Runalyze\Devices\Distributor\DistributorInterface;
use Runalyze\Devices\Distributor\DistributorProfile;

class DistributorProfileTest extends \PHPUnit_Framework_TestCase
{
    public function testThatAllClassesExist()
    {
        foreach (DistributorProfile::getEnum() as $enum) {
            $distributor = DistributorProfile::get($enum);

            $this->assertInstanceOf(DistributorInterface::class, $distributor);
            $this->assertEquals($enum, $distributor->getEnum());
            $this->assertNotEmpty($distributor->getName());
        }
    }
}