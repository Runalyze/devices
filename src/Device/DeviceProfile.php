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

use JetBrains\PhpStorm\ExpectedValues;
use Runalyze\Common\Enum\AbstractEnum;
use Runalyze\Common\Enum\AbstractEnumFactoryTrait;

class DeviceProfile extends AbstractEnum
{
    use AbstractEnumFactoryTrait;

    private static ?array $Slugs = null;

    public const GARMIN_FORERUNNER_10 = 1;
    public const GARMIN_FORERUNNER_15 = 2;
    public const GARMIN_FORERUNNER_25 = 3;
    public const GARMIN_FORERUNNER_35 = 4;
    public const GARMIN_FORERUNNER_70 = 5;
    public const GARMIN_FORERUNNER_110 = 6;
    public const GARMIN_FORERUNNER_205 = 7;
    public const GARMIN_FORERUNNER_210 = 8;
    public const GARMIN_FORERUNNER_220 = 9;
    public const GARMIN_FORERUNNER_225 = 10;
    public const GARMIN_FORERUNNER_230 = 11;
    public const GARMIN_FORERUNNER_235 = 12;
    public const GARMIN_FORERUNNER_305 = 13;
    public const GARMIN_FORERUNNER_310_X_T = 14;
    public const GARMIN_FORERUNNER_405 = 15;
    public const GARMIN_FORERUNNER_410 = 16;
    public const GARMIN_FORERUNNER_610 = 17;
    public const GARMIN_FORERUNNER_620 = 18;
    public const GARMIN_FORERUNNER_630 = 19;
    public const GARMIN_FORERUNNER_735_X_T = 20;
    public const GARMIN_FORERUNNER_910_X_T = 21;
    public const GARMIN_FORERUNNER_920_X_T = 22;
    public const GARMIN_FORERUNNER_935 = 23;
    public const GARMIN_EDGE_25 = 24;
    public const GARMIN_EDGE_200 = 25;
    public const GARMIN_EDGE_500 = 26;
    public const GARMIN_EDGE_520 = 27;
    public const GARMIN_EDGE_705 = 28;
    public const GARMIN_EDGE_800 = 29;
    public const GARMIN_EDGE_810 = 30;
    public const GARMIN_EDGE_1000 = 31;
    public const GARMIN_FENIX_2 = 32;
    public const GARMIN_FENIX_3 = 33;
    public const GARMIN_FENIX_5 = 34;
    public const GARMIN_FENIX_5_S = 35;
    public const GARMIN_FENIX_5_X = 36;
    public const GARMIN_EDGE_20 = 37;
    public const POLAR_A_300 = 38;
    public const POLAR_A_360 = 39;
    public const POLAR_A_730 = 40;
    public const POLAR_M_200 = 41;
    public const POLAR_M_400 = 42;
    public const POLAR_M_430 = 43;
    public const POLAR_M_450 = 44;
    public const POLAR_M_460 = 45;
    public const POLAR_M_600 = 46;
    public const POLAR_V_650 = 47;
    public const POLAR_V_800 = 48;
    public const POLAR_R_S_300_X = 49;
    public const POLAR_R_S_800_C_X = 50;
    public const GARMIN_UNKNOWN = 51;
    public const POLAR_UNKNOWN = 52;
    public const EPSON_UNKNOWN = 53;
    public const SUUNTO_UNKNOWN = 54;
    public const TOM_TOM_UNKNOWN = 55;
    public const TIMEX_UNKNOWN = 56;
    public const SIGMA_UNKNOWN = 57;
    public const WAHOO_UNKNOWN = 58;
    public const BRYTON_UNKNOWN = 59;
    public const EPSON_S_F_310 = 60;
    public const EPSON_S_F_510 = 61;
    public const EPSON_S_F_510_F = 62;
    public const EPSON_S_F_710_S = 63;
    public const EPSON_S_F_810 = 64;
    public const SUUNTO_AMBIT_2_R = 65;
    public const SUUNTO_AMBIT_3_RUN = 66;
    public const SUUNTO_AMBIT_3_PEAK = 67;
    public const SUUNTO_SPARTAN_ULTRA = 68;
    public const POLAR_LOOP = 69;
    public const POLAR_LOOP_2 = 70;
    public const GARMIN_SWIM = 71;
    public const TWONAV_UNKNOWN = 72;
    public const TWONAV_ADVENTURA = 73;
    public const TWONAV_SPORTIVA = 74;
    public const TWONAV_SPORTIVA_2 = 75;
    public const TWONAV_TRAVERSE = 76;
    public const TWONAV_ULTRA = 77;
    public const GARMIN_EDGE_305 = 78;
    public const GARMIN_EDGE_605 = 79;
    public const GARMIN_EDGE_820 = 80;
    public const GARMIN_FENIX_3_H_R = 81;
    public const GARMIN_FORERUNNER_301 = 82;
    public const GARMIN_FORERUNNER_405_C_X = 83;
    public const GARMIN_FORERUNNER_50 = 84;
    public const GARMIN_FORERUNNER_60 = 85;
    public const SUUNTO_AMBIT_3_SPORT = 86;
    public const SUUNTO_AMBIT_3_VERTICAL = 87;
    public const SUUNTO_AMBIT_2_S = 88;
    public const SUUNTO_T_6_C = 89;
    public const SUUNTO_T_6_D = 90;
    public const APP_RUNTASTIC = 91;
    public const APP_RUNMETER = 92;
    public const APP_RUNNERUP = 93;
    public const GARMIN_FORERUNNER_30 = 94;
    public const GARMIN_VIVO_ACTIVE = 95;
    public const GARMIN_VIVO_ACTIVE_H_R = 96;
    public const GARMIN_EPIX = 97;
    public const GARMIN_EDGE_510 = 98;
    public const GARMIN_EDGE_TOURING = 99;
    public const GARMIN_VIVO_FIT_3 = 100;
    public const GARMIN_VIVO_FIT = 101;
    public const GARMIN_VIVO_SMART = 102;
    public const GARMIN_ETREX_TOUCH = 103;
    public const GARMIN_VIVO_FIT_2 = 104;
    public const GARMIN_D_2_BRAVO = 105;
    public const GARMIN_APPROACH_S_20 = 106;
    public const GARMIN_APPROACH_S_60 = 107;
    public const GARMIN_APPROACH_X_40 = 108;
    public const GARMIN_VIVO_MOVE = 109;
    public const GARMIN_VIVO_SMART_H_R = 110;
    public const GARMIN_VIVO_SMART_GPS_H_R = 111;
    public const GARMIN_EDGE_EXPLORE_820 = 112;
    public const GARMIN_VIVO_FIT_JR = 113;
    public const GARMIN_D_2_BRAVO_TITANIUM = 114;
    public const GARMIN_APPROACH_S_6 = 115;
    public const GARMIN_EDGE_EXPLORE_1000 = 116;
    public const GARMIN_FENIX = 117;
    public const GARMIN_EDGE_1030 = 118;
    public const GARMIN_VIVO_FIT_JR_2 = 119;
    public const OSYNCE_UNKNOWN = 120;
    public const OSYNCE_NAVI_2_COACH = 121;
    public const OSYNCE_NAVI_2_MOVE = 122;
    public const OSYNCE_MIX_FREE = 123;
    public const OSYNCE_MIX_PRO = 124;
    public const OSYNCE_COACH_SMART = 125;
    public const APPLE_UNKNOWN = 126;
    public const APPLE_WATCH = 127;
    public const APP_GARMIN_CONNECT = 128;
    public const APP_EPSON_NEO_RUN = 129;
    public const APP_POLAR_FLOW = 130;
    public const APP_POLAR_PERSONAL_TRAINER = 131;
    public const APP_MOVESCOUNT = 132;
    public const APP_STRAVA = 133;
    public const APP_I_SMOOTH_RUN = 134;
    public const APP_ENDOMONDO = 135;
    public const APP_RUN_GPS_TRAINER = 136;
    public const APP_DECATHLON_COACH = 137;
    public const APP_SPORTRACTIVE = 138;
    public const APP_GPS_MASTER = 139;
    public const APP_TRAILS = 140;
    public const APP_TRAIL_RUNNER = 141;
    public const APP_MOTI_FIT = 142;
    public const APP_RUNKEEPER = 143;
    public const APP_NAVIME = 144;
    public const APP_SPORTS_TRACKER = 145;
    public const APP_KOMOOT = 146;
    public const APP_SPORT_TRACKS = 147;
    public const APP_ORUX_MAPS = 148;
    public const APP_LOCUS_MAP = 149;
    public const APP_OSM_AND = 150;
    public const APP_KOMPASS = 151;
    public const APP_SMASHRUN = 152;
    public const APP_GPSIES = 153;
    public const ARIVAL_UNKNOWN = 154;
    public const APP_RUN_GAP = 155;
    public const APP_GLOBAL_SAT = 156;
    public const APP_OUTDOOR_ACTIVE = 157;
    public const COROS_VERTIX = 158;
    public const COROS_APEX_PRO = 159;
    public const COROS_APEX = 160;
    public const COROS_PACE = 161;
    public const COROS_UNKNOWN = 162;
    public const FITBIT_UNKNOWN = 163;
    public const HUAMI_UNKNOWN = 164;
    public const HUAMI_AMAZFIT_BIP = 165;
    public const HUAMI_AMAZFIT_BIP_LITE = 166;
    public const HUAMI_AMAZFIT_G_T_R = 167;
    public const HUAMI_AMAZFIT_G_T_S = 168;
    public const HUAMI_AMAZFIT_NEXO = 169;
    public const HUAMI_AMAZFIT_VERGE_LITE = 170;
    public const HUAMI_AMAZFIT_PACE = 171;
    public const HUAMI_AMAZFIT_STRATOS = 172;
    public const HUAMI_AMAZFIT_STRATOS_PLUS = 173;
    public const SIGMA_SPORT_ACTIVO = 174;
    public const SIGMA_SPORT_ID_LIFE = 175;
    public const SIGMA_SPORT_ID_RUN_H_R = 176;
    public const SIGMA_SPORT_ONYX_EASY = 177;
    public const SIGMA_SPORT_ONYX_FIT = 178;
    public const SIGMA_SPORT_ONYX_PRO = 179;
    public const SIGMA_SPORT_PC_3 = 180;
    public const SIGMA_SPORT_PC_9 = 181;
    public const SIGMA_SPORT_PC_15 = 182;
    public const SIGMA_SPORT_PC_311 = 183;
    public const SIGMA_SPORT_PC_2213 = 184;
    public const SIGMA_SPORT_PC_2510 = 185;
    public const SIGMA_SPORT_PC_2614 = 186;
    public const SIGMA_SPORT_RC_1209 = 187;
    public const SIGMA_SPORT_RC_1411 = 188;
    public const SIGMA_SPORT_RC_MOVE = 189;
    public const GARMIN_FORERUNNER_645 = 190;
    public const GARMIN_VIVO_FIT_4 = 191;
    public const GARMIN_QUATIX_5 = 192;
    public const FITBIT_ACE = 193;
    public const FITBIT_ALTA = 194;
    public const FITBIT_ALTA_H_R = 195;
    public const FITBIT_BLAZE = 196;
    public const FITBIT_CHARGE = 197;
    public const FITBIT_CHARGE_2 = 198;
    public const FITBIT_CHARGE_3 = 199;
    public const FITBIT_CHARGE_H_R = 200;
    public const FITBIT_FLEX = 201;
    public const FITBIT_FLEX_2 = 202;
    public const FITBIT_FORCE = 203;
    public const FITBIT_IONIC = 204;
    public const FITBIT_ONE = 205;
    public const FITBIT_SURGE = 206;
    public const FITBIT_ULTRA = 207;
    public const FITBIT_VERSA = 208;
    public const FITBIT_ZIP = 209;
    public const GARMIN_FENIX_5_PLUS = 210;
    public const GARMIN_FENIX_5_S_PLUS = 211;
    public const GARMIN_FENIX_5_X_PLUS = 212;
    public const GARMIN_FENIX_6 = 213;
    public const GARMIN_FENIX_6_PRO = 214;
    public const GARMIN_FENIX_6_S = 215;
    public const GARMIN_FENIX_6_S_PRO = 216;
    public const GARMIN_FENIX_6_X = 217;
    public const GARMIN_FENIX_6_X_PRO = 218;
    public const GARMIN_SWIM_2 = 219;
    public const SUUNTO_X_9 = 220;
    public const SUUNTO_X_10 = 221;
    public const SUUNTO_X_6 = 222;
    public const SUUNTO_MEMORY_BELT = 223;
    public const SUUNTO_SMART_BELT = 224;
    public const SUUNTO_T_6 = 225;
    public const SUUNTO_T_4 = 226;
    public const SUUNTO_T_4_C = 227;
    public const SUUNTO_T_4_D = 228;
    public const SUUNTO_T_3 = 229;
    public const SUUNTO_T_3_C = 230;
    public const SUUNTO_T_3_D = 231;
    public const SUUNTO_M_4 = 232;
    public const SUUNTO_M_5 = 233;
    public const SUUNTO_QUEST = 234;
    public const SUUNTO_AMBIT = 235;
    public const SUUNTO_AMBIT_2 = 236;
    public const SUUNTO_TRAVERSE = 237;
    public const SUUNTO_TRAVERSE_ALPHA = 238;
    public const SUUNTO_SPARTAN_SPORT = 239;
    public const SUUNTO_SPARTAN_SPORT_WRIST_H_R = 240;
    public const SUUNTO_SPARTAN_TRAINER_WRIST_H_R = 241;
    public const SUUNTO_SPARTAN_SPORT_WRIST_H_R_BARO = 242;
    public const SUUNTO_3_FITNESS = 243;
    public const SUUNTO_9_BARO = 244;
    public const SUUNTO_9 = 245;
    public const SUUNTO_5 = 246;
    public const SUUNTO_EON_CORE = 247;
    public const SUUNTO_EON_STEEL = 248;
    public const SUUNTO_D_5 = 249;
    public const GARMIN_FORERUNNER_945 = 250;
    public const GARMIN_VENU = 251;
    public const APP_THE_SUFFERFEST = 252;
    public const GARMIN_FORERUNNER_645_MUSIC = 253;
    public const GARMIN_VIVO_SMART_4 = 254;
    public const GARMIN_EDGE_520_PLUS = 255;
    public const GARMIN_EDGE_830 = 256;
    public const WAHOO_ELEMNT = 257;
    public const WAHOO_ELEMNT_BOLT = 258;
    public const SUUNTO_7 = 259;
    public const APP_GARMIN_TRAINING_CENTER = 260;
    public const GARMIN_INSTINCT = 261;
    public const GARMIN_MARQ_ATHLETE = 262;
    public const GARMIN_MARQ_DRIVER = 263;
    public const GARMIN_MARQ_CAPTAIN = 264;
    public const GARMIN_MARQ_COMMANDER = 265;
    public const GARMIN_MARQ_ADVENTURER = 266;
    public const GARMIN_MARQ_AVIATOR = 267;
    public const GARMIN_VIVO_ACTIVE_4 = 268;
    public const GARMIN_VIVO_ACTIVE_3 = 269;
    public const GARMIN_FORERUNNER_245 = 270;
    public const GARMIN_FORERUNNER_245_MUSIC = 271;
    public const GARMIN_EDGE_530 = 272;
    public const GARMIN_VIVO_ACTIVE_4_S = 273;
    public const GARMIN_VIVO_SPORT = 274;
    public const GARMIN_SPEED_SENSOR_2 = 275;
    public const GARMIN_FENIX_5_WIFI = 276;
    public const GARMIN_VIVO_ACTIVE_3_MUSIC = 277;
    public const APPLE_WATCH_V_38 = 278;
    public const APPLE_WATCH_V_42 = 279;
    public const APPLE_WATCH_1_V_38 = 280;
    public const APPLE_WATCH_1_V_42 = 281;
    public const APPLE_WATCH_2_V_38 = 282;
    public const APPLE_WATCH_2_V_42 = 283;
    public const APPLE_WATCH_3_V_38 = 284;
    public const APPLE_WATCH_3_V_38_CELLULAR = 285;
    public const APPLE_WATCH_3_V_42 = 286;
    public const APPLE_WATCH_3_V_42_CELLULAR = 287;
    public const APPLE_WATCH_4_V_40 = 288;
    public const APPLE_WATCH_4_V_40_CELLULAR = 289;
    public const APPLE_WATCH_4_V_44 = 290;
    public const APPLE_WATCH_4_V_44_CELLULAR = 291;
    public const APPLE_WATCH_5_V_40 = 292;
    public const APPLE_WATCH_5_V_40_CELLULAR = 293;
    public const APPLE_WATCH_5_V_44 = 294;
    public const APPLE_WATCH_5_V_44_CELLULAR = 295;
    public const GARMIN_FIT_ANDROID = 296;
    public const GARMIN_FIT_IPHONE = 297;
    public const GARMIN_MOBILE_IOS = 298;
    public const BRYTON_RIDER_10 = 299;
    public const BRYTON_RIDER_15 = 300;
    public const BRYTON_RIDER_310 = 301;
    public const BRYTON_RIDER_330 = 302;
    public const BRYTON_RIDER_410 = 303;
    public const BRYTON_RIDER_420 = 304;
    public const BRYTON_RIDER_450 = 305;
    public const BRYTON_RIDER_530 = 306;
    public const BRYTON_RIDER_860 = 307;
    public const BRYTON_RIDER_ONE = 308;
    public const GARMIN_FORERUNNER_45 = 309;
    public const GARMIN_FORERUNNER_45_S = 310;
    public const GARMIN_APPROACH_S_10 = 311;
    public const GARMIN_APPROACH_S_40 = 312;
    public const GARMIN_APPROACH_S_62 = 313;
    public const GARMIN_DESCENT_MK_1 = 314;
    public const GARMIN_OREGON_300 = 315;
    public const GARMIN_OREGON_400_T = 316;
    public const GARMIN_OREGON_450 = 317;
    public const GARMIN_OREGON_450_T = 318;
    public const GARMIN_OREGON_550 = 319;
    public const GARMIN_OREGON_600 = 320;
    public const GARMIN_OREGON_700 = 321;
    public const GARMIN_OREGON_750 = 322;
    public const GARMIN_OREGON_750_T = 323;
    public const GARMIN_TACTIX_CHARLIE = 324;
    public const GARMIN_TACTIX_DELTA = 325;
    public const GARMIN_MONTANA_610 = 326;
    public const GARMIN_MONTANA_680 = 327;
    public const GARMIN_MONTANA_680_T = 328;
    public const WAHOO_ELEMNT_ROAM = 329;
    public const WAHOO_ELEMNT_MINI = 330;
    public const POLAR_VANTAGE_M = 331;
    public const POLAR_VANTAGE_V = 332;
    public const GARMIN_APPROACH_X_10 = 333;
    public const GARMIN_VIVO_SMART_3 = 334;
    public const GARMIN_QUATIX_3 = 335;
    public const GARMIN_EDGE_130 = 336;
    public const POLAR_A_370 = 337;
    public const POLAR_IGNITE = 338;
    public const SIGMA_SPORT_ROX_120_SPORT = 339;
    public const SIGMA_SPORT_ROX_100_GPS = 340;
    public const SIGMA_SPORT_ROX_110_GPS = 341;
    public const IGPSPORT_IGS_20_E = 342;
    public const IGPSPORT_IGS_50_E = 343;
    public const IGPSPORT_IGS_130 = 344;
    public const IGPSPORT_IGS_618 = 345;
    public const IGPSPORT_IGS_620 = 346;
    public const LEZYNE_MACRO_EASY_GPS = 347;
    public const LEZYNE_MACRO_PLUS_GPS = 348;
    public const LEZYNE_MEGA_C_GPS = 349;
    public const LEZYNE_MEGA_XL_GPS = 350;
    public const LEZYNE_MINI_GPS = 351;
    public const LEZYNE_SUPER_PRO_GPS = 352;
    public const LEZYNE_COLOR_GPS = 353;
    public const TOM_TOM_RUNNER_2 = 354;
    public const TOM_TOM_RUNNER_2_CARDIO = 355;
    public const TOM_TOM_RUNNER_2_CARDIO_MUSIC = 356;
    public const TOM_TOM_RUNNER_2_MUSIC = 357;
    public const TOM_TOM_RUNNER_3 = 358;
    public const TOM_TOM_RUNNER_3_CARDIO = 359;
    public const TOM_TOM_RUNNER_3_CARDIO_MUSIC = 360;
    public const TOM_TOM_RUNNER_3_MUSIC = 361;
    public const TOM_TOM_SPARK_3 = 362;
    public const TOM_TOM_SPARK_3_CARDIO = 363;
    public const TOM_TOM_SPARK_3_CARDIO_MUSIC = 364;
    public const TOM_TOM_SPARK_3_MUSIC = 365;
    public const TOM_TOM_ADVENTURER = 366;
    public const EPSON_PRO_SENSE_57 = 367;
    public const EPSON_PRO_SENSE_307 = 368;
    public const EPSON_PRO_SENSE_347 = 369;
    public const EPSON_PRO_SENSE_367 = 370;
    public const EPSON_PRO_SENSE_17 = 371;
    public const HUAMI_AMAZFIT_STRATOS_3 = 372;
    public const COROS_APEX_42 = 373;
    public const COROS_APEX_46 = 374;
    public const GARMIN_VIVO_MOVE_H_R = 375;
    public const GARMIN_VIVO_MOVE_3 = 376;
    public const GARMIN_VIVO_LUXE = 377;
    public const GARMIN_VIVO_MOVE_3_S = 378;
    public const GARMIN_VIVO_MOVE_STYLE = 379;
    public const GARMIN_FENIX_6_PRO_SAPPHIRE = 380;
    public const GARMIN_FENIX_6_X_SAPPHIRE = 381;
    public const GARMIN_D_2_CHARLIE = 382;
    public const GARMIN_VIVO_MOVE_LUXE = 383;
    public const GARMIN_LEGACY_HERO_FIRST_AVENGER = 384;
    public const GARMIN_LEGACY_HERO_CAPTAIN_MARVEL = 385;
    public const GARMIN_LEGACY_HERO_SAGA_DARTH_VADER = 386;
    public const GARMIN_LEGACY_HERO_SAGA_REY = 387;
    public const GARMIN_EDGE_EXPLORE = 388;
    public const GARMIN_ETREX_20_X = 389;
    public const GARMIN_ETREX_30_X = 390;
    public const GARMIN_GPSMAP_66_I = 391;
    public const GARMIN_GPSMAP_64_S = 392;
    public const GARMIN_GPSMAP_64_S_T = 393;
    public const GARMIN_GPSMAP_64 = 394;
    public const GARMIN_GPSMAP_66_S = 395;
    public const FITBIT_CHARGE_4 = 396;
    public const GARMIN_APPROACH_G_10 = 397;
    public const GARMIN_VIVO_SMART_2 = 398;
    public const GARMIN_MARQ_EXPEDITION = 399;
    public const GARMIN_EDGE_130_PLUS = 400;
    public const GARMIN_EDGE_1030_PLUS = 401;
    public const GARMIN_VIVO_ACTIVE_3_DAIMLER = 402;
    public const GARMIN_VENU_DAIMLER = 403;
    public const GARMIN_APPROACH_G_80 = 404;
    public const GARMIN_APPROACH_Z_80 = 405;
    public const GARMIN_FORETREX_101 = 406;
    public const GARMIN_FORETREX_201 = 407;
    public const GARMIN_FORETREX_301 = 408;
    public const GARMIN_FORETREX_401 = 409;
    public const GARMIN_FORETREX_501 = 410;
    public const GARMIN_FORETREX_601 = 411;
    public const GARMIN_FORETREX_701 = 412;
    public const GARMIN_GPSMAP_66 = 413;
    public const STRYD_UNKNOWN = 414;
    public const APP_ZWIFT = 415;
    public const APPLE_IPHONE_6_S_PLUS = 416;
    public const APPLE_IPHONE_S_E = 417;
    public const APPLE_IPHONE_7 = 418;
    public const APPLE_IPHONE_7_PLUS = 419;
    public const APPLE_IPHONE_8 = 420;
    public const APPLE_IPHONE_8_PLUS = 421;
    public const APPLE_IPHONE_11 = 422;
    public const APPLE_IPHONE_11_PRO = 422;
    public const APPLE_IPHONE_11_PRO_MAX = 423;
    public const APPLE_IPHONE_S_E_2 = 424;
    public const APPLE_IPHONE_X_R = 425;
    public const APPLE_IPHONE_X_S = 426;
    public const APPLE_IPHONE_X_GLOBAL = 427;
    public const APPLE_IPHONE_6_PLUS = 428;
    public const APPLE_IPHONE_6 = 429;
    public const APPLE_IPHONE_6_S = 430;
    public const APPLE_IPHONE_X_G_S_M = 431;
    public const APPLE_IPHONE_X_S_MAX = 432;
    public const APPLE_IPHONE_X_S_MAX_GLOBAL = 433;
    public const STAGES_CYCLING_UNKNOWN = 434;
    public const APP_IP_BIKE = 435;
    public const CONCEPT_2_UNKNOWN = 436;
    public const APP_TRAINER_ROAD = 437;
    public const APP_BKOOL = 438;
    public const COROS_PACE_2 = 439;
    public const IGPSPORT_UNKNOWN = 440;
    public const LEZYNE_UNKNOWN = 441;
    public const WATTBIKE_UNKNOWN = 442;
    public const WATTBIKE_ATOM = 443;
    public const SIGMA_SPORT_ID_TRI = 444;
    public const MIO_UNKNOWN = 445;
    public const POLAR_GRIT_X = 446;
    public const POLAR_VANTAGE_V_TITAN = 447;
    public const POLAR_O_H_1 = 448;
    public const APP_NIKE_RUN_CLUB = 449;
    public const GARMIN_INSTINCT_SOLAR = 450;
    public const GARMIN_VENU_SQ = 451;
    public const GARMIN_FORERUNNER_745 = 452;
    public const GARMIN_LILY = 453;
    public const HUAMI_AMAZFIT_VERGE = 454;
    public const APP_RELIVE = 455;
    public const GARMIN_GPSMAP_65_S = 456;
    public const GARMIN_GPSMAP_66_S_R = 457;
    public const GARMIN_GPSMAP_64_S_X = 458;
    public const GARMIN_ETREX_30 = 459;
    public const APP_ALLTRAILS = 460;
    public const APP_FITO_TRACK = 461;
    public const APP_KINOMAP = 462;
    public const APP_OPENTRACKS = 463;
    public const APP_ROAD_GRANT_TOURS = 464;
    public const GARMIN_DESCENT_MK_2_I = 465;
    public const GARMIN_MONTANA_700 = 466;
    public const GARMIN_MONTANA_700_I = 467;
    public const GARMIN_MONTANA_750_I = 468;
    public const APPLE_WATCH_6_V_40 = 469;
    public const APPLE_WATCH_6_V_40_CELLULAR = 470;
    public const APPLE_WATCH_6_V_44 = 471;
    public const APPLE_WATCH_6_V_44_CELLULAR = 472;
    public const POLAR_IGNITE_2 = 473;
    public const POLAR_VANTAGE_M_2 = 474;
    public const APPLE_WATCH_S_E_40 = 475;
    public const APPLE_WATCH_S_E_40_CELLULAR = 476;
    public const APPLE_WATCH_S_E_44 = 477;
    public const APPLE_WATCH_S_E_44_CELLULAR = 478;
    public const APPLE_IPHONE_12 = 479;
    public const APPLE_IPHONE_12_PRO = 480;
    public const APPLE_IPHONE_12_PRO_MAX = 481;
    public const APPLE_IPHONE_12_MINI = 482;
    public const APP_FITNESS_SYNCER = 483;
    public const FORM_SMART_SWIM_GOGGLES = 484;
    public const SPECIALIZED_UNKNOWN = 485;
    public const WAHOO_RIVAL = 486;
    public const FITBIT_VERSA_3 = 487;
    public const FITBIT_SENSE = 488;
    public const POLAR_VANTAGE_V_2 = 489;
    public const GARMIN_ENDURO = 490;
    public const APP_GHOSTRACER = 491;
    public const GARMIN_VENU_2 = 492;
    public const GARMIN_FORERUNNER_55 = 493;
    public const GARMIN_FORERUNNER_945_LTE = 494;
    public const SIGMA_SPORT_ROX_111_EVO = 495;
    public const FITBIT_CHARGE_5 = 496;
    public const COROS_VERTIX_2 = 497;
    public const HAMMERHEAD_KAROO = 498;
    public const HAMMERHEAD_KAROO_2 = 499;
    public const SAMSUNG_GALAXY_WATCH_3 = 500;
    public const SAMSUNG_GALAXY_WATCH_4 = 501;
    public const SUUNTO_9_PEAK = 502;
    public const APP_POLAR_BEAT = 503;
    public const APP_GOLDEN_CHEETAH = 504;
    public const HUAMI_AMAZFIT_G_T_R_3_PRO = 505;
    public const HUAMI_AMAZFIT_G_T_S_3 = 506;
    public const HUAMI_AMAZFIT_G_T_R_3 = 507;
    public const HUAMI_AMAZFIT_BIP_U = 508;
    public const HUAMI_AMAZFIT_T_REX = 509;
    public const HUAMI_AMAZFIT_BIP_U_PRO = 510;
    public const HUAMI_AMAZFIT_G_T_R_2 = 511;
    public const HUAMI_AMAZFIT_G_T_S_2 = 511;
    public const HUAMI_AMAZFIT_G_T_S_2_MINI = 512;
    public const HUAMI_AMAZFIT_T_REX_PRO = 513;
    public const HUAMI_AMAZFIT_STRATOS_2 = 514;
    public const POLAR_UNITE = 515;
    public const POLAR_VERITY_SENSE = 516;
    public const APP_XERT = 517;
    public const WAHOO_ELEMNT_RIVAL = 518;
    public const APP_TACX = 519;
    public const APP_ROUVY = 520;
    public const GARMIN_VENU_2_PLUS = 521;
    public const GARMIN_HRM_PRO = 522;
    public const GARMIN_FENIX_7_SAPPHIRE_SOLAR = 523;
    public const GARMIN_FENIX_7_X_SAPPHIRE_SOLAR = 524;
    public const GARMIN_D_2_DELTA_P_X = 525;
    public const GARMIN_DESCENT_MK_2_S = 526;
    public const GARMIN_FENIX_6_S_SOLAR = 527;
    public const GARMIN_FENIX_6_S_PRO_SOLAR = 528;
    public const GARMIN_FENIX_6_PRO_SOLAR = 529;
    public const GARMIN_FORERUNNER_45_PLUS = 530;
    public const GARMIN_APPROACH_S_42 = 531;
    public const GARMIN_EPIX_2 = 532;
    public const GARMIN_D_2_AIR = 533;
    public const GARMIN_FENIX_7_S_SAPPHIRE_SOLAR = 534;
    public const KIPRUN_500 = 535;
    public const SUUNTO_5_PEAK = 536;
    public const SUUNTO_ZOOP_NOVO = 537;
    public const SUUNTO_VYPER_NOVO = 538;
    public const POLAR_GRIT_X_PRO = 539;
    public const POLAR_PACER = 540;
    public const POLAR_PACER_PRO = 541;
    public const GARMIN_VIVO_SMART_5 = 542;
    public const GARMIN_DESCENT_G_1 = 543;
    public const GARMIN_FORERUNNER_225_S_MUSIC = 544;
    public const GARMIN_FORERUNNER_225_MUSIC = 545;
    public const GARMIN_VIVO_MOVE_SPORT = 546;
    public const GARMIN_INSTINCT_2_S = 547;
    public const GARMIN_FORERUNNER_955_SOLAR = 548;
    public const GARMIN_FORERUNNER_955 = 549;
    public const GARMIN_EDGE_1040_SOLAR = 550;
    public const GARMIN_FORERUNNER_255 = 551;
    public const GARMIN_FORERUNNER_255_S = 552;
    public const GARMIN_INSTINCT_2_SOLAR_ONE_PIECE_LUFFY = 553;
    public const CYCPLUS_M1 = 554;
    public const CYCPLUS_M2 = 555;
    public const DABUZIDUO_XOSS_G_N_3 = 556;
    public const DABUZIDUO_XOSS_G_N_4 = 557;
    public const SUUNTO_D_4_I = 558;
    public const FITCARE_B_C_200 = 559;
    public const GARMIN_D_2_DELTA_S = 560;
    public const GARMIN_FENIX_7_X_SOLAR = 561;
    public const POLAR_IGNITE_3 = 562;
    public const SUUNTO_D_6_I = 563;
    public const SUUNTO_9_PEAK_PRO = 564;
    public const COROS_APEX_2 = 565;
    public const COROS_APEX_2_PRO = 566;
    public const APPLE_WATCH_ULTRA = 567;
    public const APPLE_WATCH_S_E_40_V_2 = 568;
    public const APPLE_WATCH_S_E_44_V_2 = 569;
    public const APPLE_WATCH_S_E_40_CELLULAR_V_2 = 570;
    public const APPLE_WATCH_S_E_44_CELLULAR_V_2 = 571;
    public const APPLE_WATCH_7_V_41 = 572;
    public const APPLE_WATCH_7_V_41_CELLULAR = 573;
    public const APPLE_WATCH_7_V_45_CELLULAR = 574;
    public const APPLE_WATCH_7_V_45 = 575;
    public const APPLE_WATCH_8_V_41 = 576;
    public const APPLE_WATCH_8_V_41_CELLULAR = 577;
    public const APPLE_WATCH_8_V_45_CELLULAR = 578;
    public const APPLE_WATCH_8_V_45 = 579;
    public const COOPSO_B_C_107 = 580;
    public const COOPSO_B_C_200 = 581;
    public const KIPRUN_900 = 582;
    public const POLAR_H_10 = 583;
    public const SCOSCHE_R_24_H_R_M = 584;
    public const VDO_M_7_GPS = 585;
    public const GARMIN_FORERUNNER_965 = 586;
    public const GARMIN_FORERUNNER_265 = 587;
    public const GARMIN_MARQ_GOLFER = 588;
    public const GARMIN_MARQ_GOLFER_2 = 589;
    public const GARMIN_VENU_SQ_2 = 590;
    public const GARMIN_MARQ_AVIATOR_2 = 591;
    public const GARMIN_DESCENT_G_1_SOLAR = 592;
    public const GARMIN_INSTINCT_CROSSOVER_SOLAR_TACTICAL = 593;
    public const GARMIN_EDGE_EXPLORE_2 = 594;
    public const GARMIN_FORERUNNER_265_S = 595;
    public const GARMIN_ENDURO_2 = 596;
    public const SUUNTO_D_4_F = 597;
    public const WATTBIKE_ATOM_X = 598;
    public const TIMEX_IRONMAN_GPS = 599;
    public const MAGENE_UNKNOWN = 600;
    public const MAGENE_C_406 = 601;
    public const APPLE_IPHONE_S_E_3 = 602;
    public const APPLE_IPHONE_13 = 603;
    public const APPLE_IPHONE_14 = 604;
    public const APPLE_IPHONE_13_PRO = 605;
    public const APPLE_IPHONE_14_PRO = 606;
    public const APPLE_IPHONE_13_PRO_MAX = 607;
    public const APPLE_IPHONE_14_PRO_MAX = 608;
    public const APPLE_IPHONE_13_MINI = 609;
    public const APPLE_IPHONE_14_PLUS = 610;
    public const GARMIN_EDGE_540 = 611;
    public const GARMIN_EDGE_540_SOLAR = 612;
    public const GARMIN_EDGE_840 = 613;
    public const GARMIN_EDGE_840_SOLAR = 614;
    public const GARMIN_D_2_MACH_1 = 615;
    public const GARMIN_INSTINCT_CROSSOVER = 616;
    public const GARMIN_GPSMAP_67_I = 617;
    public const GARMIN_INSTINCT_2_X_SOLAR = 618;
    public const GARMIN_ETREX_S_E = 619;
    public const GARMIN_ETREX_10 = 620;
    public const GARMIN_ETREX_22_X = 621;
    public const GARMIN_ETREX_32_X = 622;
    public const GARMIN_APPROACH_S_70 = 623;
    public const SUUNTO_VERTICAL = 624;
    public const GARMIN_FENIX_7_S_PRO_SAPPHIRE_SOLAR = 625;
    public const GARMIN_EPIX_PRO = 626;
    public const SIGMA_SPORT_ROX_40 = 627;
    public const POLAR_H_9 = 628;
    public const GARMIN_EDGE_205 = 629;
    public const GARMIN_D_2_DELTA = 630;
    public const MAGENE_C_206_PRO = 631;
    public const MAGENE_C_406_PRO = 632;
    public const WAHOO_TICKR = 633;
    public const APP_BREAKAWAY = 634;
    public const FITBIT_VERSA_4 = 635;
    public const COROS_PACE_3 = 636;
    public const GARMIN_VENU_3 = 637;
    public const FITBIT_CHARGE_6 = 638;
    public const GARMIN_VIVO_ACTIVE_5 = 639;
    public const APPLE_WATCH_9_V_41 = 640;
    public const APPLE_WATCH_9_V_41_CELLULAR = 641;
    public const APPLE_WATCH_9_V_45_CELLULAR = 642;
    public const APPLE_WATCH_9_V_45 = 643;
    public const APPLE_WATCH_ULTRA_2 = 644;
    public const APPLE_IPHONE_15 = 645;
    public const APPLE_IPHONE_15_PRO = 646;
    public const APPLE_IPHONE_15_PRO_MAX = 647;
    public const APPLE_IPHONE_15_PLUS = 648;
    public const POLAR_VANTAGE_V_3 = 649;
    public const GARMIN_TACTIX_7_AMOLED = 650;
    public const GARMIN_MARQ_COMMANDER_2_CARBON = 651;
    public const GARMIN_VENU_3_S = 652;
    public const GARMIN_VIVO_MOVE_TREND = 653;
    public const SUUNTO_RACE = 654;
    public const GARMIN_FORETREX_801 = 655;
    public const GARMIN_EDGE_1040 = 656;
    public const GARMIN_FENIX_7_PRO_SOLAR = 657;
    public const GARMIN_EPIX_2_PRO = 658;
    public const GARMIN_D_2_MACH_1_PRO = 659;
    public const APP_FITNESS_POINT = 660;
    public const MAGENE_C_606 = 661;
    public const MAGENE_C_206 = 662;
    public const MAGENE_C_406_LITE = 663;
    public const WATTBIKE_ICON = 664;
    public const GARMIN_DESCENT_MK_3_I = 665;
    public const GARMIN_FENIX_6_S_PRO_DUAL_POWER = 666;
    public const LEZYNE_MICRO_C_GPS = 667;
    public const LEZYNE_MICRO_W_GPS = 668;
    public const LEZYNE_SUPER_GPS = 669;
    public const LEZYNE_MEGA_GPS = 670;
    public const LEZYNE_MACRO_GPS = 671;
    public const GARMIN_FORERUNNER_165 = 672;
    public const GARMIN_FORERUNNER_165_MUSIC = 673;
    public const POLAR_H_7 = 674;
    public const COROS_VERTIX_2_S = 675;
    public const COROS_DURA = 676;
    public const SUUNTO_OCEAN = 677;
    public const SUUNTO_D_9 = 678;
    public const SUUNTO_D_4 = 679;
    public const SUUNTO_RACE_S = 680;
    public const GARMIN_ENDURO_3 = 681;
    public const GARMIN_FENIX_E = 682;
    public const GARMIN_FENIX_8_AMOLED_43 = 683;
    public const GARMIN_FENIX_8_AMOLED_47 = 684;
    public const GARMIN_FENIX_8_AMOLED_51 = 685;
    public const GARMIN_FENIX_8_SOLAR_43 = 686;
    public const GARMIN_FENIX_8_SOLAR_47 = 687;
    public const GARMIN_FENIX_8_SOLAR_51 = 688;
    public const GARMIN_APPROACH_S_12 = 689;
    public const GARMIN_LILY_2 = 690;
    public const GARMIN_EDGE_1050 = 691;
    public const SIGMA_SPORT_ROX_70_GPS = 692;
    public const COROS_PACE_PRO = 693;
    public const GARMIN_LILY_2_ACTIVE = 694;
    public const SIGMA_SPORT_ROX_121_EVO = 695;
    public const GARMIN_ETREX_SOLAR = 696;
    public const POLAR_VANTAGE_M_3 = 697;

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
