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

    const GARMIN_FORERUNNER_10 = 1;
    const GARMIN_FORERUNNER_15 = 2;
    const GARMIN_FORERUNNER_25 = 3;
    const GARMIN_FORERUNNER_35 = 4;
    const GARMIN_FORERUNNER_70 = 5;
    const GARMIN_FORERUNNER_110 = 6;
    const GARMIN_FORERUNNER_205 = 7;
    const GARMIN_FORERUNNER_210 = 8;
    const GARMIN_FORERUNNER_220 = 9;
    const GARMIN_FORERUNNER_225 = 10;
    const GARMIN_FORERUNNER_230 = 11;
    const GARMIN_FORERUNNER_235 = 12;
    const GARMIN_FORERUNNER_305 = 13;
    const GARMIN_FORERUNNER_310_X_T = 14;
    const GARMIN_FORERUNNER_405 = 15;
    const GARMIN_FORERUNNER_410 = 16;
    const GARMIN_FORERUNNER_610 = 17;
    const GARMIN_FORERUNNER_620 = 18;
    const GARMIN_FORERUNNER_630 = 19;
    const GARMIN_FORERUNNER_735_X_T = 20;
    const GARMIN_FORERUNNER_910_X_T = 21;
    const GARMIN_FORERUNNER_920_X_T = 22;
    const GARMIN_FORERUNNER_935 = 23;
    const GARMIN_EDGE_25 = 24;
    const GARMIN_EDGE_200 = 25;
    const GARMIN_EDGE_500 = 26;
    const GARMIN_EDGE_520 = 27;
    const GARMIN_EDGE_705 = 28;
    const GARMIN_EDGE_800 = 29;
    const GARMIN_EDGE_810 = 30;
    const GARMIN_EDGE_1000 = 31;
    const GARMIN_FENIX_2 = 32;
    const GARMIN_FENIX_3 = 33;
    const GARMIN_FENIX_5 = 34;
    const GARMIN_FENIX_5_S = 35;
    const GARMIN_FENIX_5_X = 36;
    const GARMIN_EDGE_20 = 37;
    const POLAR_A_300 = 38;
    const POLAR_A_360 = 39;
    const POLAR_A_730 = 40;
    const POLAR_M_200 = 41;
    const POLAR_M_400 = 42;
    const POLAR_M_430 = 43;
    const POLAR_M_450 = 44;
    const POLAR_M_460 = 45;
    const POLAR_M_600 = 46;
    const POLAR_V_650 = 47;
    const POLAR_V_800 = 48;
    const POLAR_R_S_300_X = 49;
    const POLAR_R_S_800_C_X = 50;
    const GARMIN_UNKNOWN = 51;
    const POLAR_UNKNOWN = 52;
    const EPSON_UNKNOWN = 53;
    const SUUNTO_UNKNOWN = 54;
    const TOM_TOM_UNKNOWN = 55;
    const TIMEX_UNKNOWN = 56;
    const SIGMA_UNKNOWN = 57;
    const WAHOO_UNKNOWN = 58;
    const BRYTON_UNKNOWN = 59;
    const EPSON_S_F_310 = 60;
    const EPSON_S_F_510 = 61;
    const EPSON_S_F_510_F = 62;
    const EPSON_S_F_710_S = 63;
    const EPSON_S_F_810 = 64;
    const SUUNTO_AMBIT_2_R = 65;
    const SUUNTO_AMBIT_3_RUN = 66;
    const SUUNTO_AMBIT_3_PEAK = 67;
    const SUUNTO_SPARTAN_ULTRA = 68;
    const POLAR_LOOP = 69;
    const POLAR_LOOP_2 = 70;
    const GARMIN_SWIM = 71;
    const TWONAV_UNKNOWN = 72;
    const TWONAV_ADVENTURA = 73;
    const TWONAV_SPORTIVA = 74;
    const TWONAV_SPORTIVA_2 = 75;
    const TWONAV_TRAVERSE = 76;
    const TWONAV_ULTRA = 77;
    const GARMIN_EDGE_305 = 78;
    const GARMIN_EDGE_605 = 79;
    const GARMIN_EDGE_820 = 80;
    const GARMIN_FENIX_3_H_R = 81;
    const GARMIN_FORERUNNER_301 = 82;
    const GARMIN_FORERUNNER_405_C_X = 83;
    const GARMIN_FORERUNNER_50 = 84;
    const GARMIN_FORERUNNER_60 = 85;
    const SUUNTO_AMBIT_3_SPORT = 86;
    const SUUNTO_AMBIT_3_VERTICAL = 87;
    const SUUNTO_AMBIT_2_S = 88;
    const SUUNTO_T_6_C = 89;
    const SUUNTO_T_6_D = 90;
    const APP_RUNTASTIC = 91;
    const APP_RUNMETER = 92;
    const APP_RUNNERUP = 93;
    const GARMIN_FORERUNNER_30 = 94;
    const GARMIN_VIVO_ACTIVE = 95;
    const GARMIN_VIVO_ACTIVE_H_R = 96;
    const GARMIN_EPIX = 97;
    const GARMIN_EDGE_510 = 98;
    const GARMIN_EDGE_TOURING = 99;
    const GARMIN_VIVO_FIT_3 = 100;
    const GARMIN_VIVO_FIT = 101;
    const GARMIN_VIVO_SMART = 102;
    const GARMIN_ETREX_TOUCH = 103;
    const GARMIN_VIVO_FIT_2 = 104;
    const GARMIN_D_2_BRAVO = 105;
    const GARMIN_APPROACH_S_20 = 106;
    const GARMIN_APPROACH_S_60 = 107;
    const GARMIN_APPROACH_X_40 = 108;
    const GARMIN_VIVO_MOVE = 109;
    const GARMIN_VIVO_SMART_H_R = 110;
    const GARMIN_VIVO_SMART_GPS_H_R = 111;
    const GARMIN_EDGE_EXPLORE_820 = 112;
    const GARMIN_VIVO_FIT_JR = 113;
    const GARMIN_D_2_BRAVO_TITANIUM = 114;
    const GARMIN_APPROACH_S_6 = 115;
    const GARMIN_EDGE_EXPLORE_1000 = 116;
    const GARMIN_FENIX = 117;
    const GARMIN_EDGE_1030 = 118;
    const GARMIN_VIVO_FIT_JR_2 = 119;
    const OSYNCE_UNKNOWN = 120;
    const OSYNCE_NAVI_2_COACH = 121;
    const OSYNCE_NAVI_2_MOVE = 122;
    const OSYNCE_MIX_FREE = 123;
    const OSYNCE_MIX_PRO = 124;
    const OSYNCE_COACH_SMART = 125;
    const APPLE_UNKNOWN = 126;
    const APPLE_WATCH = 127;
    const APP_GARMIN_CONNECT = 128;
    const APP_EPSON_NEO_RUN = 129;
    const APP_POLAR_FLOW = 130;
    const APP_POLAR_PERSONAL_TRAINER = 131;
    const APP_MOVESCOUNT = 132;
    const APP_STRAVA = 133;
    const APP_I_SMOOTH_RUN = 134;
    const APP_ENDOMONDO = 135;
    const APP_RUN_GPS_TRAINER = 136;
    const APP_DECATHLON_COACH = 137;
    const APP_SPORTRACTIVE = 138;
    const APP_GPS_MASTER = 139;
    const APP_TRAILS = 140;
    const APP_TRAIL_RUNNER = 141;
    const APP_MOTI_FIT = 142;
    const APP_RUNKEEPER = 143;
    const APP_NAVIME = 144;
    const APP_SPORTS_TRACKER = 145;
    const APP_KOMOOT = 146;
    const APP_SPORT_TRACKS = 147;
    const APP_ORUX_MAPS = 148;
    const APP_LOCUS_MAP = 149;
    const APP_OSM_AND = 150;
    const APP_KOMPASS = 151;
    const APP_SMASHRUN = 152;
    const APP_GPSIES = 153;
    const ARIVAL_UNKNOWN = 154;
    const APP_RUN_GAP = 155;
    const APP_GLOBAL_SAT = 156;
    const APP_OUTDOOR_ACTIVE = 157;
    const COROS_VERTIX = 158;
    const COROS_APEX_PRO = 159;
    const COROS_APEX = 160;
    const COROS_PACE = 161;
    const COROS_UNKNOWN = 162;
    const FITBIT_UNKNOWN = 163;
    const HUAMI_UNKNOWN = 164;
    const HUAMI_AMAZFIT_BIP = 165;
    const HUAMI_AMAZFIT_BIP_LITE = 166;
    const HUAMI_AMAZFIT_G_T_R = 167;
    const HUAMI_AMAZFIT_G_T_S = 168;
    const HUAMI_AMAZFIT_NEXO = 169;
    const HUAMI_AMAZFIT_VERGE_LITE = 170;
    const HUAMI_AMAZFIT_PACE = 171;
    const HUAMI_AMAZFIT_STRATOS = 172;
    const HUAMI_AMAZFIT_STRATOS_PLUS = 173;
    const SIGMA_SPORT_ACTIVO = 174;
    const SIGMA_SPORT_ID_LIFE = 175;
    const SIGMA_SPORT_ID_RUN_H_R = 176;
    const SIGMA_SPORT_ONYX_EASY = 177;
    const SIGMA_SPORT_ONYX_FIT = 178;
    const SIGMA_SPORT_ONYX_PRO = 179;
    const SIGMA_SPORT_PC_3 = 180;
    const SIGMA_SPORT_PC_9 = 181;
    const SIGMA_SPORT_PC_15 = 182;
    const SIGMA_SPORT_PC_311 = 183;
    const SIGMA_SPORT_PC_2213 = 184;
    const SIGMA_SPORT_PC_2510 = 185;
    const SIGMA_SPORT_PC_2614 = 186;
    const SIGMA_SPORT_RC_1209 = 187;
    const SIGMA_SPORT_RC_1411 = 188;
    const SIGMA_SPORT_RC_MOVE = 189;
    const GARMIN_FORERUNNER_645 = 190;
    const GARMIN_VIVO_FIT_4 = 191;
    const GARMIN_QUATIX_5 = 192;
    const FITBIT_ACE = 193;
    const FITBIT_ALTA = 194;
    const FITBIT_ALTA_H_R = 195;
    const FITBIT_BLAZE = 196;
    const FITBIT_CHARGE = 197;
    const FITBIT_CHARGE_2 = 198;
    const FITBIT_CHARGE_3 = 199;
    const FITBIT_CHARGE_H_R = 200;
    const FITBIT_FLEX = 201;
    const FITBIT_FLEX_2 = 202;
    const FITBIT_FORCE = 203;
    const FITBIT_IONIC = 204;
    const FITBIT_ONE = 205;
    const FITBIT_SURGE = 206;
    const FITBIT_ULTRA = 207;
    const FITBIT_VERSA = 208;
    const FITBIT_ZIP = 209;
    const GARMIN_FENIX_5_PLUS = 210;
    const GARMIN_FENIX_5_S_PLUS = 211;
    const GARMIN_FENIX_5_X_PLUS = 212;
    const GARMIN_FENIX_6 = 213;
    const GARMIN_FENIX_6_PRO = 214;
    const GARMIN_FENIX_6_S = 215;
    const GARMIN_FENIX_6_S_PRO = 216;
    const GARMIN_FENIX_6_X = 217;
    const GARMIN_FENIX_6_X_PRO = 218;
    const GARMIN_SWIM_2 = 219;
    const SUUNTO_X_9 = 220;
    const SUUNTO_X_10 = 221;
    const SUUNTO_X_6 = 222;
    const SUUNTO_MEMORY_BELT = 223;
    const SUUNTO_SMART_BELT = 224;
    const SUUNTO_T_6 = 225;
    const SUUNTO_T_4 = 226;
    const SUUNTO_T_4_C = 227;
    const SUUNTO_T_4_D = 228;
    const SUUNTO_T_3 = 229;
    const SUUNTO_T_3_C = 230;
    const SUUNTO_T_3_D = 231;
    const SUUNTO_M_4 = 232;
    const SUUNTO_M_5 = 233;
    const SUUNTO_QUEST = 234;
    const SUUNTO_AMBIT = 235;
    const SUUNTO_AMBIT_2 = 236;
    const SUUNTO_TRAVERSE = 237;
    const SUUNTO_TRAVERSE_ALPHA = 238;
    const SUUNTO_SPARTAN_SPORT = 239;
    const SUUNTO_SPARTAN_SPORT_WRIST_H_R = 240;
    const SUUNTO_SPARTAN_TRAINER_WRIST_H_R = 241;
    const SUUNTO_SPARTAN_SPORT_WRIST_H_R_BARO = 242;
    const SUUNTO_3_FITNESS = 243;
    const SUUNTO_9_BARO = 244;
    const SUUNTO_9 = 245;
    const SUUNTO_5 = 246;
    const SUUNTO_EON_CORE = 247;
    const SUUNTO_EON_STEEL = 248;
    const SUUNTO_D_5 = 249;
    const GARMIN_FORERUNNER_945 = 250;
    const GARMIN_VENU = 251;
    const APP_THE_SUFFERFEST = 252;
    const GARMIN_FORERUNNER_645_MUSIC = 253;
    const GARMIN_VIVO_SMART_4 = 254;
    const GARMIN_EDGE_520_PLUS = 255;
    const GARMIN_EDGE_830 = 256;
    const WAHOO_ELEMNT = 257;
    const WAHOO_ELEMNT_BOLT = 258;
    const SUUNTO_7 = 259;
    const APP_GARMIN_TRAINING_CENTER = 260;
    const GARMIN_INSTINCT = 261;
    const GARMIN_MARQ_ATHLETE = 262;
    const GARMIN_MARQ_DRIVER = 263;
    const GARMIN_MARQ_CAPTAIN = 264;
    const GARMIN_MARQ_COMMANDER = 265;
    const GARMIN_MARQ_ADVENTURER = 266;
    const GARMIN_MARQ_AVIATOR = 267;
    const GARMIN_VIVO_ACTIVE_4 = 268;
    const GARMIN_VIVO_ACTIVE_3 = 269;
    const GARMIN_FORERUNNER_245 = 270;
    const GARMIN_FORERUNNER_245_MUSIC = 271;
    const GARMIN_EDGE_530 = 272;
    const GARMIN_VIVO_ACTIVE_4_S = 273;
    const GARMIN_VIVO_SPORT = 274;
    const GARMIN_SPEED_SENSOR_2 = 275;
    const GARMIN_FENIX_5_WIFI = 276;
    const GARMIN_VIVO_ACTIVE_3_MUSIC = 277;
    const APPLE_WATCH_V_38 = 278;
    const APPLE_WATCH_V_42 = 279;
    const APPLE_WATCH_1_V_38 = 280;
    const APPLE_WATCH_1_V_42 = 281;
    const APPLE_WATCH_2_V_38 = 282;
    const APPLE_WATCH_2_V_42 = 283;
    const APPLE_WATCH_3_V_38 = 284;
    const APPLE_WATCH_3_V_38_CELLULAR = 285;
    const APPLE_WATCH_3_V_42 = 286;
    const APPLE_WATCH_3_V_42_CELLULAR = 287;
    const APPLE_WATCH_4_V_40 = 288;
    const APPLE_WATCH_4_V_40_CELLULAR = 289;
    const APPLE_WATCH_4_V_44 = 290;
    const APPLE_WATCH_4_V_44_CELLULAR = 291;
    const APPLE_WATCH_5_V_40 = 292;
    const APPLE_WATCH_5_V_40_CELLULAR = 293;
    const APPLE_WATCH_5_V_44 = 294;
    const APPLE_WATCH_5_V_44_CELLULAR = 295;
    const GARMIN_FIT_ANDROID = 296;
    const GARMIN_FIT_IPHONE = 297;
    const GARMIN_MOBILE_IOS = 298;
    const BRYTON_RIDER_10 = 299;
    const BRYTON_RIDER_15 = 300;
    const BRYTON_RIDER_310 = 301;
    const BRYTON_RIDER_330 = 302;
    const BRYTON_RIDER_410 = 303;
    const BRYTON_RIDER_420 = 304;
    const BRYTON_RIDER_450 = 305;
    const BRYTON_RIDER_530 = 306;
    const BRYTON_RIDER_860 = 307;
    const BRYTON_RIDER_ONE = 308;
    const GARMIN_FORERUNNER_45 = 309;
    const GARMIN_FORERUNNER_45_S = 310;
    const GARMIN_APPROACH_S_10 = 311;
    const GARMIN_APPROACH_S_40 = 312;
    const GARMIN_APPROACH_S_62 = 313;
    const GARMIN_DESCENT_MK_1 = 314;
    const GARMIN_OREGON_300 = 315;
    const GARMIN_OREGON_400_T = 316;
    const GARMIN_OREGON_450 = 317;
    const GARMIN_OREGON_450_T = 318;
    const GARMIN_OREGON_550 = 319;
    const GARMIN_OREGON_600 = 320;
    const GARMIN_OREGON_700 = 321;
    const GARMIN_OREGON_750 = 322;
    const GARMIN_OREGON_750_T = 323;
    const GARMIN_TACTIX_CHARLIE = 324;
    const GARMIN_TACTIX_DELTA = 325;
    const GARMIN_MONTANA_610 = 326;
    const GARMIN_MONTANA_680 = 327;
    const GARMIN_MONTANA_680_T = 328;
    const WAHOO_ELEMNT_ROAM = 329;
    const WAHOO_ELEMNT_MINI = 330;
    const POLAR_VANTAGE_M = 331;
    const POLAR_VANTAGE_V = 332;
    const GARMIN_APPROACH_X_10 = 333;
    const GARMIN_VIVO_SMART_3 = 334;
    const GARMIN_QUATIX_3 = 335;
    const GARMIN_EDGE_130 = 336;
    const POLAR_A_370 = 337;
    const POLAR_IGNITE = 338;
    const SIGMA_SPORT_ROX_120_SPORT = 339;
    const SIGMA_SPORT_ROX_100_GPS = 340;
    const SIGMA_SPORT_ROX_110_GPS = 341;
    const IGPSPORT_IGS_20_E = 342;
    const IGPSPORT_IGS_50_E = 343;
    const IGPSPORT_IGS_130 = 344;
    const IGPSPORT_IGS_618 = 345;
    const IGPSPORT_IGS_620 = 346;
    const LEZYNE_MACRO_EASY_GPS = 347;
    const LEZYNE_MACRO_PLUS_GPS = 348;
    const LEZYNE_MEGA_C_GPS = 349;
    const LEZYNE_MEGA_XL_GPS = 350;
    const LEZYNE_MINI_GPS = 351;
    const LEZYNE_SUPER_PRO_GPS = 352;
    const LEZYNE_COLOR_GPS = 353;
    const TOM_TOM_RUNNER_2 = 354;
    const TOM_TOM_RUNNER_2_CARDIO = 355;
    const TOM_TOM_RUNNER_2_CARDIO_MUSIC = 356;
    const TOM_TOM_RUNNER_2_MUSIC = 357;
    const TOM_TOM_RUNNER_3 = 358;
    const TOM_TOM_RUNNER_3_CARDIO = 359;
    const TOM_TOM_RUNNER_3_CARDIO_MUSIC = 360;
    const TOM_TOM_RUNNER_3_MUSIC = 361;
    const TOM_TOM_SPARK_3 = 362;
    const TOM_TOM_SPARK_3_CARDIO = 363;
    const TOM_TOM_SPARK_3_CARDIO_MUSIC = 364;
    const TOM_TOM_SPARK_3_MUSIC = 365;
    const TOM_TOM_ADVENTURER = 366;
    const EPSON_PRO_SENSE_57 = 367;
    const EPSON_PRO_SENSE_307 = 368;
    const EPSON_PRO_SENSE_347 = 369;
    const EPSON_PRO_SENSE_367 = 370;
    const EPSON_PRO_SENSE_17 = 371;
    const HUAMI_AMAZFIT_STRATOS_3 = 372;
    const COROS_APEX_42 = 373;
    const COROS_APEX_46 = 374;
    const GARMIN_VIVO_MOVE_H_R = 375;
    const GARMIN_VIVO_MOVE_3 = 376;
    const GARMIN_VIVO_LUXE = 377;
    const GARMIN_VIVO_MOVE_3_S = 378;
    const GARMIN_VIVO_MOVE_STYLE = 379;
    const GARMIN_FENIX_6_PRO_SAPPHIRE = 380;
    const GARMIN_FENIX_6_X_SAPPHIRE = 381;
    const GARMIN_D_2_CHARLIE = 382;
    const GARMIN_VIVO_MOVE_LUXE = 383;
    const GARMIN_LEGACY_HERO_FIRST_AVENGER = 384;
    const GARMIN_LEGACY_HERO_CAPTAIN_MARVEL = 385;
    const GARMIN_LEGACY_HERO_SAGA_DARTH_VADER = 386;
    const GARMIN_LEGACY_HERO_SAGA_REY = 387;
    const GARMIN_EDGE_EXPLORE = 388;
    const GARMIN_ETREX_20_X = 389;
    const GARMIN_ETREX_30_X = 390;
    const GARMIN_GPSMAP_66_I = 391;
    const GARMIN_GPSMAP_64_S = 392;
    const GARMIN_GPSMAP_64_S_T = 393;
    const GARMIN_GPSMAP_64 = 394;
    const GARMIN_GPSMAP_66_S = 395;
    const FITBIT_CHARGE_4 = 396;
    const GARMIN_APPROACH_G_10 = 397;
    const GARMIN_VIVO_SMART_2 = 398;
    const GARMIN_MARQ_EXPEDITION = 399;
    const GARMIN_EDGE_130_PLUS = 400;
    const GARMIN_EDGE_1030_PLUS = 401;
    const GARMIN_VIVO_ACTIVE_3_DAIMLER = 402;
    const GARMIN_VENU_DAIMLER = 403;
    const GARMIN_APPROACH_G_80 = 404;
    const GARMIN_APPROACH_Z_80 = 405;
    const GARMIN_FORETREX_101 = 406;
    const GARMIN_FORETREX_201 = 407;
    const GARMIN_FORETREX_301 = 408;
    const GARMIN_FORETREX_401 = 409;
    const GARMIN_FORETREX_501 = 410;
    const GARMIN_FORETREX_601 = 411;
    const GARMIN_FORETREX_701 = 412;
    const GARMIN_GPSMAP_66 = 413;
    const STRYD_UNKNOWN = 414;
    const APP_ZWIFT = 415;
    const APPLE_IPHONE_6_S_PLUS = 416;
    const APPLE_IPHONE_S_E = 417;
    const APPLE_IPHONE_7 = 418;
    const APPLE_IPHONE_7_PLUS = 419;
    const APPLE_IPHONE_8 = 420;
    const APPLE_IPHONE_8_PLUS = 421;
    const APPLE_IPHONE_11 = 422;
    const APPLE_IPHONE_11_PRO = 422;
    const APPLE_IPHONE_11_PRO_MAX = 423;
    const APPLE_IPHONE_S_E_2 = 424;
    const APPLE_IPHONE_X_R = 425;
    const APPLE_IPHONE_X_S = 426;
    const APPLE_IPHONE_X_GLOBAL = 427;
    const APPLE_IPHONE_6_PLUS = 428;
    const APPLE_IPHONE_6 = 429;
    const APPLE_IPHONE_6_S = 430;
    const APPLE_IPHONE_X_G_S_M = 431;
    const APPLE_IPHONE_X_S_MAX = 432;
    const APPLE_IPHONE_X_S_MAX_GLOBAL = 433;
    const STAGES_CYCLING_UNKNOWN = 434;
    const APP_IP_BIKE = 435;
    const CONCEPT_2_UNKNOWN = 436;
    const APP_TRAINER_ROAD = 437;
    const APP_BKOOL = 438;
    const COROS_PACE_2 = 439;
    const IGPSPORT_UNKNOWN = 440;
    const LEZYNE_UNKNOWN = 441;
    const WATTBIKE_UNKNOWN = 442;
    const WATTBIKE_ATOM = 443;
    const SIGMA_SPORT_ID_TRI = 444;
    const MIO_UNKNOWN = 445;
    const POLAR_GRIT_X = 446;
    const POLAR_VANTAGE_V_TITAN = 447;
    const POLAR_O_H_1 = 448;
    const APP_NIKE_RUN_CLUB = 449;
    const GARMIN_INSTINCT_SOLAR = 450;
    const GARMIN_VENU_SQ = 451;
    const GARMIN_FORERUNNER_745 = 452;
    const GARMIN_LILY = 453;
    const HUAMI_AMAZFIT_VERGE = 454;
    const APP_RELIVE = 455;
    const GARMIN_GPSMAP_65_S = 456;
    const GARMIN_GPSMAP_66_S_R = 457;
    const GARMIN_GPSMAP_64_S_X = 458;
    const GARMIN_ETREX_30 = 459;
    const APP_ALLTRAILS = 460;
    const APP_FITO_TRACK = 461;
    const APP_KINOMAP = 462;
    const APP_OPENTRACKS = 463;
    const APP_ROAD_GRANT_TOURS = 464;
    const GARMIN_DESCENT_MK_2_I = 465;
    const GARMIN_MONTANA_700 = 466;
    const GARMIN_MONTANA_700_I = 467;
    const GARMIN_MONTANA_750_I = 468;
    const APPLE_WATCH_6_V_40 = 469;
    const APPLE_WATCH_6_V_40_CELLULAR = 470;
    const APPLE_WATCH_6_V_44 = 471;
    const APPLE_WATCH_6_V_44_CELLULAR = 472;
    const POLAR_IGNITE_2 = 473;
    const POLAR_VANTAGE_M_2 = 474;
    const APPLE_WATCH_S_E_40 = 475;
    const APPLE_WATCH_S_E_40_CELLULAR = 476;
    const APPLE_WATCH_S_E_44 = 477;
    const APPLE_WATCH_S_E_44_CELLULAR = 478;
    const APPLE_IPHONE_12 = 479;
    const APPLE_IPHONE_12_PRO = 480;
    const APPLE_IPHONE_12_PRO_MAX = 481;
    const APPLE_IPHONE_12_MINI = 482;
    const APP_FITNESS_SYNCER = 483;
    const FORM_SMART_SWIM_GOGGLES = 484;
    const SPECIALIZED_UNKNOWN = 485;
    const WAHOO_RIVAL = 486;
    const FITBIT_VERSA_3 = 487;
    const FITBIT_SENSE = 488;
    const POLAR_VANTAGE_V_2 = 489;
    const GARMIN_ENDURO = 490;
    const APP_GHOSTRACER = 491;
    const GARMIN_VENU_2 = 492;
    const GARMIN_FORERUNNER_55 = 493;
    const GARMIN_FORERUNNER_945_LTE = 494;
    const SIGMA_SPORT_ROX_111_EVO = 495;
    const FITBIT_CHARGE_5 = 496;
    const COROS_VERTIX_2 = 497;
    const HAMMERHEAD_KAROO = 498;
    const HAMMERHEAD_KAROO_2 = 499;
    const SAMSUNG_GALAXY_WATCH_3 = 500;
    const SAMSUNG_GALAXY_WATCH_4 = 501;
    const SUUNTO_9_PEAK = 502;
    const APP_POLAR_BEAT = 503;
    const APP_GOLDEN_CHEETAH = 504;
    const HUAMI_AMAZFIT_G_T_R_3_PRO = 505;
    const HUAMI_AMAZFIT_G_T_S_3 = 506;
    const HUAMI_AMAZFIT_G_T_R_3 = 507;
    const HUAMI_AMAZFIT_BIP_U = 508;
    const HUAMI_AMAZFIT_T_REX = 509;
    const HUAMI_AMAZFIT_BIP_U_PRO = 510;
    const HUAMI_AMAZFIT_G_T_R_2 = 511;
    const HUAMI_AMAZFIT_G_T_S_2 = 511;
    const HUAMI_AMAZFIT_G_T_S_2_MINI = 512;
    const HUAMI_AMAZFIT_T_REX_PRO = 513;
    const HUAMI_AMAZFIT_STRATOS_2 = 514;
    const POLAR_UNITE = 515;
    const POLAR_VERITY_SENSE = 516;
    const APP_XERT = 517;
    const WAHOO_ELEMNT_RIVAL = 518;
    const APP_TACX = 519;
    const APP_ROUVY = 520;
    const GARMIN_VENU_2_PLUS = 521;
    const GARMIN_HRM_PRO = 522;
    const GARMIN_FENIX_7_SAPPHIRE_SOLAR = 523;
    const GARMIN_FENIX_7_X_SAPPHIRE_SOLAR = 524;
    const GARMIN_D_2_DELTA_P_X = 525;
    const GARMIN_DESCENT_MK_2_S = 526;
    const GARMIN_FENIX_6_S_SOLAR = 527;
    const GARMIN_FENIX_6_S_PRO_SOLAR = 528;
    const GARMIN_FENIX_6_PRO_SOLAR = 529;
    const GARMIN_FORERUNNER_45_PLUS = 530;
    const GARMIN_APPROACH_S_42 = 531;
    const GARMIN_EPIX_2 = 532;
    const GARMIN_D_2_AIR = 533;
    const GARMIN_FENIX_7_S_SAPPHIRE_SOLAR = 534;
    const KIPRUN_500 = 535;
    const SUUNTO_5_PEAK = 536;
    const SUUNTO_ZOOP_NOVO = 537;
    const SUUNTO_VYPER_NOVO = 538;
    const POLAR_GRIT_X_PRO = 539;
    const POLAR_PACER = 540;
    const POLAR_PACER_PRO = 541;
    const GARMIN_VIVO_SMART_5 = 542;
    const GARMIN_DESCENT_G_1 = 543;
    const GARMIN_FORERUNNER_225_S_MUSIC = 544;
    const GARMIN_FORERUNNER_225_MUSIC = 545;
    const GARMIN_VIVO_MOVE_SPORT = 546;
    const GARMIN_INSTINCT_2_S = 547;
    const GARMIN_FORERUNNER_955_SOLAR = 548;
    const GARMIN_FORERUNNER_955 = 549;
    const GARMIN_EDGE_1040_SOLAR = 550;
    const GARMIN_FORERUNNER_255 = 551;
    const GARMIN_FORERUNNER_255_S = 552;
    const GARMIN_INSTINCT_2_SOLAR_ONE_PIECE_LUFFY = 553;
    const CYCPLUS_M1 = 554;
    const CYCPLUS_M2 = 555;
    const DABUZIDUO_XOSS_G_N_3 = 556;
    const DABUZIDUO_XOSS_G_N_4 = 557;
    const SUUNTO_D_4_I = 558;
    const FITCARE_B_C_200 = 559;
    const GARMIN_D_2_DELTA_S = 560;
    const GARMIN_FENIX_7_X_SOLAR = 561;
    const POLAR_IGNITE_3 = 562;
    const SUUNTO_D_6_I = 563;
    const SUUNTO_9_PEAK_PRO = 564;
    const COROS_APEX_2 = 565;
    const COROS_APEX_2_PRO = 566;
    const APPLE_WATCH_ULTRA = 567;
    const APPLE_WATCH_S_E_40_V_2 = 568;
    const APPLE_WATCH_S_E_44_V_2 = 569;
    const APPLE_WATCH_S_E_40_CELLULAR_V_2 = 570;
    const APPLE_WATCH_S_E_44_CELLULAR_V_2 = 571;
    const APPLE_WATCH_7_V_41 = 572;
    const APPLE_WATCH_7_V_41_CELLULAR = 573;
    const APPLE_WATCH_7_V_45_CELLULAR = 574;
    const APPLE_WATCH_7_V_45 = 575;
    const APPLE_WATCH_8_V_41 = 576;
    const APPLE_WATCH_8_V_41_CELLULAR = 577;
    const APPLE_WATCH_8_V_45_CELLULAR = 578;
    const APPLE_WATCH_8_V_45 = 579;
    const COOPSO_B_C_107 = 580;
    const COOPSO_B_C_200 = 581;
    const KIPRUN_900 = 582;
    const POLAR_H_10 = 583;
    const SCOSCHE_R_24_H_R_M = 584;
    const VDO_M_7_GPS = 585;
    const GARMIN_FORERUNNER_965 = 586;
    const GARMIN_FORERUNNER_265 = 587;
    const GARMIN_MARQ_GOLFER = 588;
    const GARMIN_MARQ_GOLFER_2 = 589;
    const GARMIN_VENU_SQ_2 = 590;
    const GARMIN_MARQ_AVIATOR_2 = 591;
    const GARMIN_DESCENT_G_1_SOLAR = 592;
    const GARMIN_INSTINCT_CROSSOVER_SOLAR_TACTICAL = 593;
    const GARMIN_EDGE_EXPLORE_2 = 594;
    const GARMIN_FORERUNNER_265_S = 595;
    const GARMIN_ENDURO_2 = 596;
    const SUUNTO_D_4_F = 597;
    const WATTBIKE_ATOM_X = 598;
    const TIMEX_IRONMAN_GPS = 599;
    const MAGENE_UNKNOWN = 600;
    const MAGENE_C_406 = 601;
    const APPLE_IPHONE_S_E_3 = 602;
    const APPLE_IPHONE_13 = 603;
    const APPLE_IPHONE_14 = 604;
    const APPLE_IPHONE_13_PRO = 605;
    const APPLE_IPHONE_14_PRO = 606;
    const APPLE_IPHONE_13_PRO_MAX = 607;
    const APPLE_IPHONE_14_PRO_MAX = 608;
    const APPLE_IPHONE_13_MINI = 609;
    const APPLE_IPHONE_14_PLUS = 610;
    const GARMIN_EDGE_540 = 611;
    const GARMIN_EDGE_540_SOLAR = 612;
    const GARMIN_EDGE_840 = 613;
    const GARMIN_EDGE_840_SOLAR = 614;
    const GARMIN_D_2_MACH_1 = 615;
    const GARMIN_INSTINCT_CROSSOVER = 616;
    const GARMIN_GPSMAP_67_I = 617;
    const GARMIN_INSTINCT_2_X_SOLAR = 618;
    const GARMIN_ETREX_S_E = 619;
    const GARMIN_ETREX_10 = 620;
    const GARMIN_ETREX_22_X = 621;
    const GARMIN_ETREX_32_X = 622;
    const GARMIN_APPROACH_S_70 = 623;
    const SUUNTO_VERTICAL = 624;
    const GARMIN_FENIX_7_S_PRO_SAPPHIRE_SOLAR = 625;
    const GARMIN_EPIX_PRO = 626;
    const SIGMA_SPORT_ROX_40 = 627;
    const POLAR_H_9 = 628;
    const GARMIN_EDGE_205 = 629;
    const GARMIN_D_2_DELTA = 630;
    const MAGENE_C_206_PRO = 631;
    const MAGENE_C_406_PRO = 632;
    const WAHOO_TICKR = 633;
    const APP_BREAKAWAY = 634;
    const FITBIT_VERSA_4 = 635;
    const COROS_PACE_3 = 636;
    const GARMIN_VENU_3 = 637;
    const FITBIT_CHARGE_6 = 638;
    const GARMIN_VIVO_ACTIVE_5 = 639;
    const APPLE_WATCH_9_V_41 = 640;
    const APPLE_WATCH_9_V_41_CELLULAR = 641;
    const APPLE_WATCH_9_V_45_CELLULAR = 642;
    const APPLE_WATCH_9_V_45 = 643;
    const APPLE_WATCH_ULTRA_2 = 644;
    const APPLE_IPHONE_15 = 645;
    const APPLE_IPHONE_15_PRO = 646;
    const APPLE_IPHONE_15_PRO_MAX = 647;
    const APPLE_IPHONE_15_PLUS = 648;
    const POLAR_VANTAGE_V_3 = 649;
    const GARMIN_TACTIX_7_AMOLED = 650;
    const GARMIN_MARQ_COMMANDER_2_CARBON = 651;
    const GARMIN_VENU_3_S = 652;
    const GARMIN_VIVO_MOVE_TREND = 653;
    const SUUNTO_RACE = 654;
    const GARMIN_FORETREX_801 = 655;
    const GARMIN_EDGE_1040 = 656;
    const GARMIN_FENIX_7_PRO_SOLAR = 657;
    const GARMIN_EPIX_2_PRO = 658;
    const GARMIN_D_2_MACH_1_PRO = 659;
    const APP_FITNESS_POINT = 660;
    const MAGENE_C_606 = 661;
    const MAGENE_C_206 = 662;
    const MAGENE_C_406_LITE = 663;
    const WATTBIKE_ICON = 664;
    const GARMIN_DESCENT_MK_3_I = 665;
    const GARMIN_FENIX_6_S_PRO_DUAL_POWER = 666;
    const LEZYNE_MICRO_C_GPS = 667;
    const LEZYNE_MICRO_W_GPS = 668;
    const LEZYNE_SUPER_GPS = 669;
    const LEZYNE_MEGA_GPS = 670;
    const LEZYNE_MACRO_GPS = 671;

    public static function getSlugs(): array
    {
        self::generateSlugsArray();

        return self::$Slugs;
    }

    public static function getSlug(
        #[ExpectedValues(valuesFromClass: self::class)]
        int $enum
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
