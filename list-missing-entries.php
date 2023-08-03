<?php

require_once 'vendor/autoload.php';

use Runalyze\Devices\Device\DeviceInterface;
use Runalyze\Devices\Device\DeviceProfile;
use Runalyze\Devices\Distributor\DistributorInterface;
use Runalyze\Devices\Distributor\DistributorProfile;

/** @var DistributorInterface[] $distributor */
$distributor = array_combine(
    DistributorProfile::getEnum(),
    array_map(fn(int $enum) => DistributorProfile::get($enum), DistributorProfile::getEnum())
);
$distributorKeys = array_flip(DistributorProfile::getEnum());
$missingByDistributor = [];

foreach (DeviceProfile::getEnum() as $deviceKey => $deviceEnum) {
    /** @var DeviceInterface $device */
    $device = DeviceProfile::get($deviceEnum);

    if (!in_array($deviceEnum, $distributor[$device->getDistributorEnum()]->getDeviceEnumList())) {
        $missingByDistributor[$device->getDistributorEnum()][] = sprintf('%s (ID %d)', $deviceKey, $deviceEnum);
    }
}

foreach ($missingByDistributor as $distributorEnum => $missingDevices) {
    echo sprintf("%s (ID %d):\n", $distributorKeys[$distributorEnum], $distributorEnum);
    echo "    ".implode("\n    ", $missingDevices);
    echo "\n";
}
