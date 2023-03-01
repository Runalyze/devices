<?php

require_once 'vendor/autoload.php';

use Runalyze\Devices\Device\DeviceProfile;

foreach (DeviceProfile::getEnum() as $enum) {
    $device = DeviceProfile::get($enum);

    if ($device->hasBarometer()) {
        echo $device->getName()."\n";
    }
}
