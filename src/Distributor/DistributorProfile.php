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

use JetBrains\PhpStorm\ExpectedValues;
use Runalyze\Common\Enum\AbstractEnum;
use Runalyze\Common\Enum\AbstractEnumFactoryTrait;

class DistributorProfile extends AbstractEnum
{
    use AbstractEnumFactoryTrait;

    private static ?array $Slugs = null;

    public const GARMIN = 1;
    public const POLAR = 2;
    public const SUUNTO = 3;
    public const TOM_TOM = 4;
    public const EPSON = 5;
    public const APP = 6;
    public const TIMEX = 7;
    public const OSYNCE = 8;
    public const SIGMA = 9;
    public const WAHOO = 10;
    public const BRYTON = 11;
    public const TWONAV = 12;
    public const APPLE = 13;
    public const ARIVAL = 14;
    public const COROS = 15;
    public const FITBIT = 16;
    public const HUAMI = 17;
    public const SOLEUS = 18;
    public const SONY = 19;
    public const HUAWEI = 20;
    public const MISFIT = 21;
    public const SAMSUNG = 22;
    public const IGPSPORT = 23;
    public const LEZYNE = 25;
    public const ELITE = 26;
    public const WITHINGS = 27;
    public const STRYD = 28;
    public const STAGES_CYCLING = 30;
    public const CONCEPT_2 = 31;
    public const WATTBIKE = 32;
    public const MIO = 33;
    public const SPECIALIZED = 34;
    public const FORM = 35;
    public const HAMMERHEAD = 36;
    public const PELETON = 37;
    public const KIPRUN = 38;
    public const CYCPLUS = 39;
    public const DABUZIDUO = 40;
    public const FITCARE = 41;
    public const COOPSO = 42;
    public const SCOSCHE = 43;
    public const VDO = 44;
    public const MAGENE = 45;
    public const XPLOVA = 46;

    public static function getSlugs(): array
    {
        self::generateSlugsArray();

        return self::$Slugs;
    }

    public static function getSlug(
        #[ExpectedValues(valuesFromClass: self::class)]
        int $enum,
    ): string {
        self::generateSlugsArray();

        return self::$Slugs[$enum] ?? (string) $enum;
    }

    public static function getEnumBySlug(string $slug): ?int
    {
        self::generateSlugsArray();

        return array_flip(self::$Slugs)[$slug] ?? null;
    }

    private static function generateSlugsArray(): void
    {
        if (null === self::$Slugs) {
            self::$Slugs = array_map(
                fn (string $enumName) => strtolower(str_replace('_', '-', $enumName)),
                array_flip(self::getEnum())
            );
        }
    }
}
