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

use Runalyze\Common\Enum\AbstractEnum;
use Runalyze\Common\Enum\AbstractEnumFactoryTrait;

class DeviceProfile extends AbstractEnum
{
    use AbstractEnumFactoryTrait;

    /** @var int */
    const GARMIN_FORERUNNER_10 = 1;

    /** @var int */
    const GARMIN_FORERUNNER_15 = 2;

    /** @var int */
    const GARMIN_FORERUNNER_25 = 3;

    /** @var int */
    const GARMIN_FORERUNNER_35 = 4;

    /** @var int */
    const GARMIN_FORERUNNER_70 = 5;

    /** @var int */
    const GARMIN_FORERUNNER_110 = 6;

    /** @var int */
    const GARMIN_FORERUNNER_205 = 7;

    /** @var int */
    const GARMIN_FORERUNNER_210 = 8;

    /** @var int */
    const GARMIN_FORERUNNER_220 = 9;

    /** @var int */
    const GARMIN_FORERUNNER_225 = 10;

    /** @var int */
    const GARMIN_FORERUNNER_230 = 11;

    /** @var int */
    const GARMIN_FORERUNNER_235 = 12;

    /** @var int */
    const GARMIN_FORERUNNER_305 = 13;

    /** @var int */
    const GARMIN_FORERUNNER_310_X_T = 14;

    /** @var int */
    const GARMIN_FORERUNNER_405 = 15;

    /** @var int */
    const GARMIN_FORERUNNER_410 = 16;

    /** @var int */
    const GARMIN_FORERUNNER_610 = 17;

    /** @var int */
    const GARMIN_FORERUNNER_620 = 18;

    /** @var int */
    const GARMIN_FORERUNNER_630 = 19;

    /** @var int */
    const GARMIN_FORERUNNER_735_X_T = 20;

    /** @var int */
    const GARMIN_FORERUNNER_910_X_T = 21;

    /** @var int */
    const GARMIN_FORERUNNER_920_X_T = 22;

    /** @var int */
    const GARMIN_FORERUNNER_935 = 23;

    /** @var int */
    const GARMIN_EDGE_25 = 24;

    /** @var int */
    const GARMIN_EDGE_200 = 25;

    /** @var int */
    const GARMIN_EDGE_500 = 26;

    /** @var int */
    const GARMIN_EDGE_520 = 27;

    /** @var int */
    const GARMIN_EDGE_705 = 28;

    /** @var int */
    const GARMIN_EDGE_800 = 29;

    /** @var int */
    const GARMIN_EDGE_810 = 30;

    /** @var int */
    const GARMIN_EDGE_1000 = 31;

    /** @var int */
    const GARMIN_FENIX_2 = 32;

    /** @var int */
    const GARMIN_FENIX_3 = 33;

    /** @var int */
    const GARMIN_FENIX_5 = 34;

    /** @var int */
    const GARMIN_FENIX_5_S = 35;

    /** @var int */
    const GARMIN_FENIX_5_X = 36;

    /** @var int */
    const GARMIN_EDGE_20 = 37;

    /** @var int */
    const POLAR_A_300 = 38;

    /** @var int */
    const POLAR_A_360 = 39;

    /** @var int */
    const POLAR_A_730 = 40;

    /** @var int */
    const POLAR_M_200 = 41;

    /** @var int */
    const POLAR_M_400 = 42;

    /** @var int */
    const POLAR_M_430 = 43;

    /** @var int */
    const POLAR_M_450 = 44;

    /** @var int */
    const POLAR_M_460 = 45;

    /** @var int */
    const POLAR_M_600 = 46;

    /** @var int */
    const POLAR_V_650 = 47;

    /** @var int */
    const POLAR_V_800 = 48;

    /** @var int */
    const POLAR_R_S_300_X = 49;

    /** @var int */
    const POLAR_R_S_800_C_X = 50;

    /** @var int */
    const GARMIN_UNKNOWN = 51;

    /** @var int */
    const POLAR_UNKNOWN = 52;

    /** @var int */
    const EPSON_UNKNOWN = 53;

    /** @var int */
    const SUUNTO_UNKNOWN = 54;

    /** @var int */
    const TOM_TOM_UNKNOWN = 55;

    /** @var int */
    const TIMEX_UNKNOWN = 56;

    /** @var int */
    const SIGMA_UNKNOWN = 57;

    /** @var int */
    const WAHOO_UNKNOWN = 58;

    /** @var int */
    const BRYTON_UNKNOWN = 59;

    /** @var int */
    const EPSON_S_F_310 = 60;

    /** @var int */
    const EPSON_S_F_510 = 61;

    /** @var int */
    const EPSON_S_F_510_F = 62;

    /** @var int */
    const EPSON_S_F_710_S = 63;

    /** @var int */
    const EPSON_S_F_810 = 64;

    /** @var int */
    const SUUNTO_AMBIT_2_R = 65;

    /** @var int */
    const SUUNTO_AMBIT_3_RUN = 66;

    /** @var int */
    const SUUNTO_AMBIT_3_PEAK = 67;

    /** @var int */
    const SUUNTO_SPARTAN_ULTRA = 68;

    /** @var int */
    const POLAR_LOOP = 69;

    /** @var int */
    const POLAR_LOOP_2 = 70;

    /** @var int */
    const GARMIN_SWIM = 71;

    /** @var int */
    const TWONAV_UNKNOWN = 72;

    /** @var int */
    const TWONAV_ADVENTURA = 73;

    /** @var int */
    const TWONAV_SPORTIVA = 74;

    /** @var int */
    const TWONAV_SPORTIVA_2 = 75;

    /** @var int */
    const TWONAV_TRAVERSE = 76;

    /** @var int */
    const TWONAV_ULTRA = 77;

    /** @var int */
    const GARMIN_EDGE_305 = 78;

    /** @var int */
    const GARMIN_EDGE_605 = 79;

    /** @var int */
    const GARMIN_EDGE_820 = 80;

    /** @var int */
    const GARMIN_FENIX_3_H_R = 81;

    /** @var int */
    const GARMIN_FORERUNNER_301 = 82;

    /** @var int */
    const GARMIN_FORERUNNER_405_C_X = 83;

    /** @var int */
    const GARMIN_FORERUNNER_50 = 84;

    /** @var int */
    const GARMIN_FORERUNNER_60 = 85;

    /** @var int */
    const SUUNTO_AMBIT_3_SPORT = 86;

    /** @var int */
    const SUUNTO_AMBIT_3_VERTICAL = 87;

    /** @var int */
    const SUUNTO_AMBIT_2_S = 88;

    /** @var int */
    const SUUNTO_T_6_C = 89;

    /** @var int */
    const SUUNTO_T_6_D = 90;

    /** @var int */
    const APP_RUNTASTIC = 91;

    /** @var int */
    const APP_RUNMETER = 92;

    /** @var int */
    const APP_RUNNERUP = 93;

    /** @var int */
    const GARMIN_FORERUNNER_30 = 94;

    /** @var int */
    const GARMIN_VIVO_ACTIVE = 95;

    /** @var int */
    const GARMIN_VIVO_ACTIVE_H_R = 96;

    /** @var int */
    const GARMIN_EPIX = 97;

    /** @var int */
    const GARMIN_EDGE_510 = 98;

    /** @var int */
    const GARMIN_EDGE_TOURING = 99;

    /** @var int */
    const GARMIN_VIVO_FIT_3 = 100;

    /** @var int */
    const GARMIN_VIVO_FIT = 101;

    /** @var int */
    const GARMIN_VIVO_SMART = 102;

    /** @var int */
    const GARMIN_ETREX_TOUCH = 103;

    /** @var int */
    const GARMIN_VIVO_FIT_2 = 104;

    /** @var int */
    const GARMIN_D_2_BRAVO = 105;

    /** @var int */
    const GARMIN_APPROACH_S_20 = 106;

    /** @var int */
    const GARMIN_APPROACH_S_60 = 107;

    /** @var int */
    const GARMIN_APPROACH_X_40 = 108;

    /** @var int */
    const GARMIN_VIVO_MOVE = 109;

    /** @var int */
    const GARMIN_VIVO_SMART_H_R = 110;

    /** @var int */
    const GARMIN_VIVO_SMART_GPS_H_R = 111;

    /** @var int */
    const GARMIN_EDGE_EXPLORE_820 = 112;

    /** @var int */
    const GARMIN_VIVO_FIT_JR = 113;

    /** @var int */
    const GARMIN_D_2_BRAVO_TITANIUM = 114;

    /** @var int */
    const GARMIN_APPROACH_S_6 = 115;

    /** @var int */
    const GARMIN_EDGE_EXPLORE_1000 = 116;

    /** @var int */
    const GARMIN_FENIX = 117;

    /** @var int */
    const GARMIN_EDGE_1030 = 118;

    /** @var int */
    const GARMIN_VIVO_FIT_JR_2 = 119;

    /** @var int */
    const OSYNCE_UNKNOWN = 120;

    /** @var int */
    const OSYNCE_NAVI_2_COACH = 121;

    /** @var int */
    const OSYNCE_NAVI_2_MOVE = 122;

    /** @var int */
    const OSYNCE_MIX_FREE = 123;

    /** @var int */
    const OSYNCE_MIX_PRO = 124;

    /** @var int */
    const OSYNCE_COACH_SMART = 125;

    /** @var int */
    const APPLE_UNKNOWN = 126;

    /** @var int */
    const APPLE_WATCH = 127;

    /** @var int */
    const APP_GARMIN_CONNECT = 128;

    /** @var int */
    const APP_EPSON_NEO_RUN = 129;

    /** @var int */
    const APP_POLAR_FLOW = 130;

    /** @var int */
    const APP_POLAR_PERSONAL_TRAINER = 131;

    /** @var int */
    const APP_MOVESCOUNT = 132;

    /** @var int */
    const APP_STRAVA = 133;

    /** @var int */
    const APP_I_SMOOTH_RUN = 134;

    /** @var int */
    const APP_ENDOMONDO = 135;

    /** @var int */
    const APP_RUN_GPS_TRAINER = 136;

    /** @var int */
    const APP_DECATHLON_COACH = 137;

    /** @var int */
    const APP_SPORTRACTIVE = 138;

    /** @var int */
    const APP_GPS_MASTER = 139;

    /** @var int */
    const APP_TRAILS = 140;

    /** @var int */
    const APP_TRAIL_RUNNER = 141;

    /** @var int */
    const APP_MOTI_FIT = 142;

    /** @var int */
    const APP_RUNKEEPER = 143;

    /** @var int */
    const APP_NAVIME = 144;

    /** @var int */
    const APP_SPORTS_TRACKER = 145;

    /** @var int */
    const APP_KOMOOT = 146;

    /** @var int */
    const APP_SPORT_TRACKS = 147;

    /** @var int */
    const APP_ORUX_MAPS = 148;

    /** @var int */
    const APP_LOCUS_MAP = 149;

    /** @var int */
    const APP_OSM_AND = 150;

    /** @var int */
    const APP_KOMPASS = 151;

    /** @var int */
    const APP_SMASHRUN = 152;

    /** @var int */
    const APP_GPSIES = 153;

    /** @var int */
    const ARIVAL_UNKNOWN = 154;

    /** @var int */
    const APP_RUN_GAP = 155;

    /** @var int */
    const APP_GLOBAL_SAT = 156;

    /** @var int */
    const APP_OUTDOOR_ACTIVE = 157;

    /** @var int */
    const COROS_VERTIX = 158;

    /** @var int */
    const COROS_APEX_PRO = 159;

    /** @var int */
    const COROS_APEX = 160;

    /** @var int */
    const COROS_PACE = 161;

    /** @var int */
    const COROS_UNKNOWN = 162;

    /** @var int */
    const FITBIT_UNKNOWN = 163;

    /** @var int */
    const HUAMI_UNKNOWN = 164;

    /** @var int */
    const HUAMI_AMAZFIT_BIP = 165;

    /** @var int */
    const HUAMI_AMAZFIT_BIP_LITE = 166;

    /** @var int */
    const HUAMI_AMAZFIT_G_T_R = 167;

    /** @var int */
    const HUAMI_AMAZFIT_G_T_S = 168;

    /** @var int */
    const HUAMI_AMAZFIT_NEXO = 169;

    /** @var int */
    const HUAMI_AMAZFIT_VERGE_LITE = 170;

    /** @var int */
    const HUAMI_AMAZFIT_PACE = 171;

    /** @var int */
    const HUAMI_AMAZFIT_STRATOS = 172;

    /** @var int */
    const HUAMI_AMAZFIT_STRATOS_PLUS = 173;

    /** @var int */
    const SIGMA_SPORT_ACTIVO = 174;

    /** @var int */
    const SIGMA_SPORT_ID_LIFE = 175;

    /** @var int */
    const SIGMA_SPORT_ID_RUN_H_R = 176;

    /** @var int */
    const SIGMA_SPORT_ONYX_EASY = 177;

    /** @var int */
    const SIGMA_SPORT_ONYX_FIT = 178;

    /** @var int */
    const SIGMA_SPORT_ONYX_PRO = 179;

    /** @var int */
    const SIGMA_SPORT_PC_3 = 180;

    /** @var int */
    const SIGMA_SPORT_PC_9 = 181;

    /** @var int */
    const SIGMA_SPORT_PC_15 = 182;

    /** @var int */
    const SIGMA_SPORT_PC_311 = 183;

    /** @var int */
    const SIGMA_SPORT_PC_2213 = 184;

    /** @var int */
    const SIGMA_SPORT_PC_2510 = 185;

    /** @var int */
    const SIGMA_SPORT_PC_2614 = 186;

    /** @var int */
    const SIGMA_SPORT_RC_1209 = 187;

    /** @var int */
    const SIGMA_SPORT_RC_1411 = 188;

    /** @var int */
    const SIGMA_SPORT_RC_MOVE = 189;

    /** @var int */
    const GARMIN_FORERUNNER_645 = 190;

    /** @var int */
    const GARMIN_VIVO_FIT_4 = 191;

    /** @var int */
    const GARMIN_QUATIX_5 = 192;

    /** @var int */
    const FITBIT_ACE = 193;

    /** @var int */
    const FITBIT_ALTA = 194;

    /** @var int */
    const FITBIT_ALTA_H_R = 195;

    /** @var int */
    const FITBIT_BLAZE = 196;

    /** @var int */
    const FITBIT_CHARGE = 197;

    /** @var int */
    const FITBIT_CHARGE_2 = 198;

    /** @var int */
    const FITBIT_CHARGE_3 = 199;

    /** @var int */
    const FITBIT_CHARGE_H_R = 200;

    /** @var int */
    const FITBIT_FLEX = 201;

    /** @var int */
    const FITBIT_FLEX_2 = 202;

    /** @var int */
    const FITBIT_FORCE = 203;

    /** @var int */
    const FITBIT_IONIC = 204;

    /** @var int */
    const FITBIT_ONE = 205;

    /** @var int */
    const FITBIT_SURGE = 206;

    /** @var int */
    const FITBIT_ULTRA = 207;

    /** @var int */
    const FITBIT_VERSA = 208;

    /** @var int */
    const FITBIT_ZIP = 209;

    /** @var int */
    const GARMIN_FENIX_5_PLUS = 210;

    /** @var int */
    const GARMIN_FENIX_5_S_PLUS = 211;

    /** @var int */
    const GARMIN_FENIX_5_X_PLUS = 212;

    /** @var int */
    const GARMIN_FENIX_6 = 213;

    /** @var int */
    const GARMIN_FENIX_6_PRO = 214;

    /** @var int */
    const GARMIN_FENIX_6_S = 215;

    /** @var int */
    const GARMIN_FENIX_6_S_PRO = 216;

    /** @var int */
    const GARMIN_FENIX_6_X = 217;

    /** @var int */
    const GARMIN_FENIX_6_X_PRO = 218;

    /** @var int */
    const GARMIN_SWIM_2 = 219;

    /** @var int */
    const SUUNTO_X_9 = 220;

    /** @var int */
    const SUUNTO_X_10 = 221;

    /** @var int */
    const SUUNTO_X_6 = 222;

    /** @var int */
    const SUUNTO_MEMORY_BELT = 223;

    /** @var int */
    const SUUNTO_SMART_BELT = 224;

    /** @var int */
    const SUUNTO_T_6 = 225;

    /** @var int */
    const SUUNTO_T_4 = 226;

    /** @var int */
    const SUUNTO_T_4_C = 227;

    /** @var int */
    const SUUNTO_T_4_D = 228;

    /** @var int */
    const SUUNTO_T_3 = 229;

    /** @var int */
    const SUUNTO_T_3_C = 230;

    /** @var int */
    const SUUNTO_T_3_D = 231;

    /** @var int */
    const SUUNTO_M_4 = 232;

    /** @var int */
    const SUUNTO_M_5 = 233;

    /** @var int */
    const SUUNTO_QUEST = 234;

    /** @var int */
    const SUUNTO_AMBIT = 235;

    /** @var int */
    const SUUNTO_AMBIT_2 = 236;

    /** @var int */
    const SUUNTO_TRAVERSE = 237;

    /** @var int */
    const SUUNTO_TRAVERSE_ALPHA = 238;

    /** @var int */
    const SUUNTO_SPARTAN_SPORT = 239;

    /** @var int */
    const SUUNTO_SPARTAN_SPORT_WRIST_H_R = 240;

    /** @var int */
    const SUUNTO_SPARTAN_TRAINER_WRIST_H_R = 241;

    /** @var int */
    const SUUNTO_SPARTAN_SPORT_WRIST_H_R_BARO = 242;

    /** @var int */
    const SUUNTO_3_FITNESS = 243;

    /** @var int */
    const SUUNTO_9_BARO = 244;

    /** @var int */
    const SUUNTO_9 = 245;

    /** @var int */
    const SUUNTO_5 = 246;

    /** @var int */
    const SUUNTO_EON_CORE = 247;

    /** @var int */
    const SUUNTO_EON_STEEL = 248;

    /** @var int */
    const SUUNTO_D_5 = 249;

    /** @var int */
    const GARMIN_FORERUNNER_945 = 250;

    /** @var int */
    const GARMIN_VENU = 251;

    /** @var int */
    const APP_THE_SUFFERFEST = 252;

    /** @var int */
    const GARMIN_FORERUNNER_645_MUSIC = 253;

    /** @var int */
    const GARMIN_VIVO_SMART_4 = 254;

    /** @var int */
    const GARMIN_EDGE_520_PLUS = 255;

    /** @var int */
    const GARMIN_EDGE_830 = 256;

    /** @var int */
    const WAHOO_ELEMNT = 257;

    /** @var int */
    const WAHOO_ELEMNT_BOLT = 258;

    /** @var int */
    const SUUNTO_7 = 259;

    /** @var int */
    const APP_GARMIN_TRAINING_CENTER = 260;

    /** @var int */
    const GARMIN_INSTINCT = 261;

    /** @var int */
    const GARMIN_MARQ_ATHLETE = 262;

    /** @var int */
    const GARMIN_MARQ_DRIVER = 263;

    /** @var int */
    const GARMIN_MARQ_CAPTAIN = 264;

    /** @var int */
    const GARMIN_MARQ_COMMANDER = 265;

    /** @var int */
    const GARMIN_MARQ_ADVENTURER = 266;

    /** @var int */
    const GARMIN_MARQ_AVIATOR = 267;

    /** @var int */
    const GARMIN_VIVO_ACTIVE_4 = 268;

    /** @var int */
    const GARMIN_VIVO_ACTIVE_3 = 269;

    /** @var int */
    const GARMIN_FORERUNNER_245 = 270;

    /** @var int */
    const GARMIN_FORERUNNER_245_MUSIC = 271;

    /** @var int */
    const GARMIN_EDGE_530 = 272;

    /** @var int */
    const GARMIN_VIVO_ACTIVE_4_S = 273;

    /** @var int */
    const GARMIN_VIVO_SPORT = 274;

    /** @var int */
    const GARMIN_SPEED_SENSOR_2 = 275;

    /** @var int */
    const GARMIN_FENIX_5_WIFI = 276;

    /** @var int */
    const GARMIN_VIVO_ACTIVE_3_MUSIC = 277;

    /** @var int */
    const APPLE_WATCH_V_38 = 278;

    /** @var int */
    const APPLE_WATCH_V_42 = 279;

    /** @var int */
    const APPLE_WATCH_1_V_38 = 280;

    /** @var int */
    const APPLE_WATCH_1_V_42 = 281;

    /** @var int */
    const APPLE_WATCH_2_V_38 = 282;

    /** @var int */
    const APPLE_WATCH_2_V_42 = 283;

    /** @var int */
    const APPLE_WATCH_3_V_38 = 284;

    /** @var int */
    const APPLE_WATCH_3_V_38_CELLULAR = 285;

    /** @var int */
    const APPLE_WATCH_3_V_42 = 286;

    /** @var int */
    const APPLE_WATCH_3_V_42_CELLULAR = 287;

    /** @var int */
    const APPLE_WATCH_4_V_40 = 288;

    /** @var int */
    const APPLE_WATCH_4_V_40_CELLULAR = 289;

    /** @var int */
    const APPLE_WATCH_4_V_44 = 290;

    /** @var int */
    const APPLE_WATCH_4_V_44_CELLULAR = 291;

    /** @var int */
    const APPLE_WATCH_5_V_40 = 292;

    /** @var int */
    const APPLE_WATCH_5_V_40_CELLULAR = 293;

    /** @var int */
    const APPLE_WATCH_5_V_44 = 294;

    /** @var int */
    const APPLE_WATCH_5_V_44_CELLULAR = 295;

    /** @var int */
    const GARMIN_FIT_ANDROID = 296;

    /** @var int */
    const GARMIN_FIT_IPHONE = 297;

    /** @var int */
    const GARMIN_MOBILE_IOS = 298;

    /** @var int */
    const BRYTON_RIDER_10 = 299;

    /** @var int */
    const BRYTON_RIDER_15 = 300;

    /** @var int */
    const BRYTON_RIDER_310 = 301;

    /** @var int */
    const BRYTON_RIDER_330 = 302;

    /** @var int */
    const BRYTON_RIDER_410 = 303;

    /** @var int */
    const BRYTON_RIDER_420 = 304;

    /** @var int */
    const BRYTON_RIDER_450 = 305;

    /** @var int */
    const BRYTON_RIDER_530 = 306;

    /** @var int */
    const BRYTON_RIDER_860 = 307;

    /** @var int */
    const BRYTON_RIDER_ONE = 308;

    /** @var int */
    const GARMIN_FORERUNNER_45 = 309;

    /** @var int */
    const GARMIN_FORERUNNER_45_S = 310;

    /** @var int */
    const GARMIN_APPROACH_S_10 = 311;

    /** @var int */
    const GARMIN_APPROACH_S_40 = 312;

    /** @var int */
    const GARMIN_APPROACH_S_62 = 313;

    /** @var int */
    const GARMIN_DESCENT_MK_1 = 314;

    /** @var int */
    const GARMIN_OREGON_300 = 315;

    /** @var int */
    const GARMIN_OREGON_400_T = 316;

    /** @var int */
    const GARMIN_OREGON_450 = 317;

    /** @var int */
    const GARMIN_OREGON_450_T = 318;

    /** @var int */
    const GARMIN_OREGON_550 = 319;

    /** @var int */
    const GARMIN_OREGON_600 = 320;

    /** @var int */
    const GARMIN_OREGON_700 = 321;

    /** @var int */
    const GARMIN_OREGON_750 = 322;

    /** @var int */
    const GARMIN_OREGON_750_T = 323;

    /** @var int */
    const GARMIN_TACTIX_CHARLIE = 324;

    /** @var int */
    const GARMIN_TACTIX_DELTA = 325;

    /** @var int */
    const GARMIN_MONTANA_610 = 326;

    /** @var int */
    const GARMIN_MONTANA_680 = 327;

    /** @var int */
    const GARMIN_MONTANA_680_T = 328;

    /** @var int */
    const WAHOO_ELEMNT_ROAM = 329;

    /** @var int */
    const WAHOO_ELEMNT_MINI = 330;

    /** @var int */
    const POLAR_VANTAGE_M = 331;

    /** @var int */
    const POLAR_VANTAGE_V = 332;

    /** @var int */
    const GARMIN_APPROACH_X_10 = 333;

    /** @var int */
    const GARMIN_VIVO_SMART_3 = 334;

    /** @var int */
    const GARMIN_QUATIX_3 = 335;

    /** @var int */
    const GARMIN_EDGE_130 = 336;

    /** @var int */
    const POLAR_A_370 = 337;

    /** @var int */
    const POLAR_IGNITE = 338;

    /** @var int */
    const SIGMA_SPORT_ROX_120_SPORT = 339;

    /** @var int */
    const SIGMA_SPORT_ROX_100_GPS = 340;

    /** @var int */
    const SIGMA_SPORT_ROX_110_GPS = 341;

    /** @var int */
    const IGPSPORT_IGS_20_E = 342;

    /** @var int */
    const IGPSPORT_IGS_50_E = 343;

    /** @var int */
    const IGPSPORT_IGS_130 = 344;

    /** @var int */
    const IGPSPORT_IGS_618 = 345;

    /** @var int */
    const IGPSPORT_IGS_620 = 346;

    /** @var int */
    const LEZYNE_MACRO_EASY_GPS = 347;

    /** @var int */
    const LEZYNE_MACRO_PLUS_GPS = 348;

    /** @var int */
    const LEZYNE_MEGA_C_GPS = 349;

    /** @var int */
    const LEZYNE_MEGA_XL_GPS = 350;

    /** @var int */
    const LEZYNE_MINI_GPS = 351;

    /** @var int */
    const LEZYNE_SUPER_PRO_GPS = 352;

    /** @var int */
    const LEZYNE_COLOR_GPS = 353;

    /** @var int */
    const TOM_TOM_RUNNER_2 = 354;

    /** @var int */
    const TOM_TOM_RUNNER_2_CARDIO = 355;

    /** @var int */
    const TOM_TOM_RUNNER_2_CARDIO_MUSIC = 356;

    /** @var int */
    const TOM_TOM_RUNNER_2_MUSIC = 357;

    /** @var int */
    const TOM_TOM_RUNNER_3 = 358;

    /** @var int */
    const TOM_TOM_RUNNER_3_CARDIO = 359;

    /** @var int */
    const TOM_TOM_RUNNER_3_CARDIO_MUSIC = 360;

    /** @var int */
    const TOM_TOM_RUNNER_3_MUSIC = 361;

    /** @var int */
    const TOM_TOM_SPARK_3 = 362;

    /** @var int */
    const TOM_TOM_SPARK_3_CARDIO = 363;

    /** @var int */
    const TOM_TOM_SPARK_3_CARDIO_MUSIC = 364;

    /** @var int */
    const TOM_TOM_SPARK_3_MUSIC = 365;

    /** @var int */
    const TOM_TOM_ADVENTURER = 366;

    /** @var int */
    const EPSON_PRO_SENSE_57 = 367;

    /** @var int */
    const EPSON_PRO_SENSE_307 = 368;

    /** @var int */
    const EPSON_PRO_SENSE_347 = 369;

    /** @var int */
    const EPSON_PRO_SENSE_367 = 370;

    /** @var int */
    const EPSON_PRO_SENSE_17 = 371;

    /** @var int */
    const HUAMI_AMAZFIT_STRATOS_3 = 372;

    /** @var int */
    const COROS_APEX_42 = 373;

    /** @var int */
    const COROS_APEX_46 = 374;

    /** @var int */
    const GARMIN_VIVO_MOVE_H_R = 375;

    /** @var int */
    const GARMIN_VIVO_MOVE_3 = 376;

    /** @var int */
    const GARMIN_VIVO_LUXE = 377;

    /** @var int */
    const GARMIN_VIVO_MOVE_3_S = 378;

    /** @var int */
    const GARMIN_VIVO_MOVE_STYLE = 379;

    /** @var int */
    const GARMIN_FENIX_6_PRO_SAPPHIRE = 380;

    /** @var int */
    const GARMIN_FENIX_6_X_SAPPHIRE = 381;

    /** @var int */
    const GARMIN_D_2_CHARLIE = 382;

    /** @var int */
    const GARMIN_VIVO_MOVE_LUXE = 383;

    /** @var int */
    const GARMIN_LEGACY_HERO_FIRST_AVENGER = 384;

    /** @var int */
    const GARMIN_LEGACY_HERO_CAPTAIN_MARVEL = 385;

    /** @var int */
    const GARMIN_LEGACY_SAGA_DARTH_VADER = 386;

    /** @var int */
    const GARMIN_LEGACY_SAGA_REY = 387;

    /** @var int */
    const GARMIN_EDGE_EXPLORE = 388;

    /** @var int */
    const GARMIN_ETREX_20_X = 389;

    /** @var int */
    const GARMIN_ETREX_30_X = 390;

    /** @var int */
    const GARMIN_GPSMAP_66_I = 391;

    /** @var int */
    const GARMIN_GPSMAP_64_S = 392;

    /** @var int */
    const GARMIN_GPSMAP_64_S_T = 393;

    /** @var int */
    const GARMIN_GPSMAP_64 = 394;

    /** @var int */
    const GARMIN_GPSMAP_66_S = 395;

    /** @var int */
    const FITBIT_CHARGE_4 = 396;

    /** @var int */
    const GARMIN_APPROACH_G_10 = 397;

    /** @var int */
    const GARMIN_VIVO_SMART_2 = 398;

    /** @var int */
    const GARMIN_MARQ_EXPEDITION = 399;

    /** @var int */
    const GARMIN_EDGE_130_PLUS = 400;

    /** @var int */
    const GARMIN_EDGE_1030_PLUS = 401;

    /** @var int */
    const GARMIN_VIVO_ACTIVE_3_DAIMLER = 402;

    /** @var int */
    const GARMIN_VENU_DAIMLER = 403;

    /** @var int */
    const GARMIN_APPROACH_G_80 = 404;

    /** @var int */
    const GARMIN_APPROACH_Z_80 = 405;

    /** @var int */
    const GARMIN_FORETREX_101 = 406;

    /** @var int */
    const GARMIN_FORETREX_201 = 407;

    /** @var int */
    const GARMIN_FORETREX_301 = 408;

    /** @var int */
    const GARMIN_FORETREX_401 = 409;

    /** @var int */
    const GARMIN_FORETREX_501 = 410;

    /** @var int */
    const GARMIN_FORETREX_601 = 411;

    /** @var int */
    const GARMIN_FORETREX_701 = 412;

    /** @var int */
    const GARMIN_GPSMAP_66 = 413;

    /** @var int */
    const STRYD_UNKNOWN = 414;

    /** @var int */
    const APP_ZWIFT = 415;

    /** @var int */
    const APPLE_IPHONE_6_S_PLUS = 416;

    /** @var int */
    const APPLE_IPHONE_S_E = 417;

    /** @var int */
    const APPLE_IPHONE_7 = 418;

    /** @var int */
    const APPLE_IPHONE_7_PLUS = 419;

    /** @var int */
    const APPLE_IPHONE_8 = 420;

    /** @var int */
    const APPLE_IPHONE_8_PLUS = 421;

    /** @var int */
    const APPLE_IPHONE_11 = 422;

    /** @var int */
    const APPLE_IPHONE_11_PRO = 422;

    /** @var int */
    const APPLE_IPHONE_11_PRO_MAX = 423;

    /** @var int */
    const APPLE_IPHONE_S_E_2 = 424;

    /** @var int */
    const APPLE_IPHONE_X_R = 425;

    /** @var int */
    const APPLE_IPHONE_X_S = 426;

    /** @var int */
    const APPLE_IPHONE_X_GLOBAL = 427;

    /** @var int */
    const APPLE_IPHONE_6_PLUS = 428;

    /** @var int */
    const APPLE_IPHONE_6 = 429;

    /** @var int */
    const APPLE_IPHONE_6_S = 430;

    /** @var int */
    const APPLE_IPHONE_X_G_S_M = 431;

    /** @var int */
    const APPLE_IPHONE_X_S_MAX = 432;

    /** @var int */
    const APPLE_IPHONE_X_S_MAX_GLOBAL = 433;

    /** @var int */
    const STAGES_CYCLING_UNKNOWN = 434;

    /** @var int */
    const APP_IP_BIKE = 435;

    /** @var int */
    const CONCEPT_2_UNKNOWN = 436;

    /** @var int */
    const APP_TRAINER_ROAD = 437;

    /** @var int */
    const APP_BKOOL = 438;

    /** @var int */
    const COROS_PACE_2 = 439;

    /** @var int */
    const IGPSPORT_UNKNOWN = 440;

    /** @var int */
    const LEZYNE_UNKNOWN = 441;

    /** @var int */
    const WATTBIKE_UNKNOWN = 442;

    /** @var int */
    const WATTBIKE_ATOM = 443;

    /** @var int */
    const SIGMA_SPORT_ID_TRI = 444;

    /** @var int */
    const MIO_UNKNOWN = 445;

    /** @var int */
    const POLAR_GRIT_X = 446;

    /** @var int */
    const POLAR_VANTAGE_V_TITAN = 447;

    /** @var int */
    const POLAR_O_H_1 = 448;

    /** @var int */
    const APP_NIKE_RUN_CLUB = 449;

    /** @var int */
    const GARMIN_INSTINCT_SOLAR = 450;

    /** @var int */
    const GARMIN_VENU_SQ = 451;

    /** @var int */
    const GARMIN_FORERUNNER_745 = 452;

    /** @var int */
    const GARMIN_LILY = 453;

    /** @var int */
    const HUAMI_AMAZFIT_VERGE = 454;

    /** @var int */
    const APP_RELIVE = 455;

    /** @var int */
    const GARMIN_GPSMAP_65_S = 456;

    /** @var int */
    const GARMIN_GPSMAP_66_S_R = 457;

    /** @var int */
    const GARMIN_GPSMAP_64_S_X = 458;

    /** @var int */
    const GARMIN_ETREX_30 = 459;

    /** @var int */
    const APP_ALLTRAILS = 460;

    /** @var int */
    const APP_FITO_TRACK = 461;

    /** @var int */
    const APP_KINOMAP = 462;

    /** @var int */
    const APP_OPENTRACKS = 463;

    /** @var int */
    const APP_ROAD_GRANT_TOURS = 464;

    /** @var int */
    const GARMIN_DESCENT_MK_2_I = 465;

    /** @var int */
    const GARMIN_MONTANA_700 = 466;

    /** @var int */
    const GARMIN_MONTANA_700_I = 467;

    /** @var int */
    const GARMIN_MONTANA_750_I = 468;

    /** @var int */
    const APPLE_WATCH_6_V_40 = 469;

    /** @var int */
    const APPLE_WATCH_6_V_40_CELLULAR = 470;

    /** @var int */
    const APPLE_WATCH_6_V_44 = 471;

    /** @var int */
    const APPLE_WATCH_6_V_44_CELLULAR = 472;

    /** @var int */
    const POLAR_IGNITE_2 = 473;

    /** @var int */
    const POLAR_VANTAGE_M_2 = 474;

    /** @var int */
    const APPLE_WATCH_S_E_40 = 475;

    /** @var int */
    const APPLE_WATCH_S_E_40_CELLULAR = 476;

    /** @var int */
    const APPLE_WATCH_S_E_44 = 477;

    /** @var int */
    const APPLE_WATCH_S_E_44_CELLULAR = 478;

    /** @var int */
    const APPLE_IPHONE_12 = 479;

    /** @var int */
    const APPLE_IPHONE_12_PRO = 480;

    /** @var int */
    const APPLE_IPHONE_12_PRO_MAX = 481;

    /** @var int */
    const APPLE_IPHONE_12_MINI = 482;

    /** @var int */
    const APP_FITNESS_SYNCER = 483;

    /** @var int */
    const FORM_SMART_SWIM_GOGGLES = 484;

    /** @var int */
    const SPECIALIZED_UNKNOWN = 485;

    /** @var int */
    const WAHOO_RIVAL = 486;

    /** @var int */
    const FITBIT_VERSA_3 = 487;

    /** @var int */
    const FITBIT_SENSE = 488;

    /** @var int */
    const POLAR_VANTAGE_V_2 = 489;

    /** @var int */
    const GARMIN_ENDURO = 490;

    /** @var int */
    const APP_GHOSTRACER = 491;

    /** @var int */
    const GARMIN_VENU_2 = 492;

    /** @var int */
    const GARMIN_FORERUNNER_55 = 493;

    /** @var int */
    const GARMIN_FORERUNNER_945_LTE = 494;

    /** @var int */
    const SIGMA_SPORT_ROX_111_EVO = 495;

    /** @var int */
    const FITBIT_CHARGE_5 = 496;

    /** @var int */
    const COROS_VERTIX_2 = 497;

    /** @var int */
    const HAMMERHEAD_KAROO = 498;

    /** @var int */
    const HAMMERHEAD_KAROO_2 = 499;

    /** @var int */
    const SAMSUNG_GALAXY_WATCH_3 = 500;

    /** @var int */
    const SAMSUNG_GALAXY_WATCH_4 = 501;

    /** @var int */
    const SUUNTO_9_PEAK = 502;

    /** @var int */
    const APP_POLAR_BEAT = 503;

    /** @var int */
    const APP_GOLDEN_CHEETAH = 504;

    /** @var int */
    const HUAMI_AMAZFIT_G_T_R_3_PRO = 505;

    /** @var int */
    const HUAMI_AMAZFIT_G_T_S_3 = 506;

    /** @var int */
    const HUAMI_AMAZFIT_G_T_R_3 = 507;

    /** @var int */
    const HUAMI_AMAZFIT_BIP_U = 508;

    /** @var int */
    const HUAMI_AMAZFIT_T_REX = 509;

    /** @var int */
    const HUAMI_AMAZFIT_BIP_U_PRO = 510;

    /** @var int */
    const HUAMI_AMAZFIT_G_T_R_2 = 511;

    /** @var int */
    const HUAMI_AMAZFIT_G_T_S_2 = 511;

    /** @var int */
    const HUAMI_AMAZFIT_G_T_S_2_MINI = 512;

    /** @var int */
    const HUAMI_AMAZFIT_T_REX_PRO = 513;

    /** @var int */
    const HUAMI_AMAZFIT_STRATOS_2 = 514;

    /** @var int */
    const POLAR_UNITE = 515;

    /** @var int */
    const POLAR_VERITY_SENSE = 516;

    /** @var int */
    const APP_XERT = 517;

    /** @var int */
    const WAHOO_ELEMNT_RIVAL = 518;

    /** @var int */
    const APP_TACX = 519;

    /** @var int */
    const APP_ROUVY = 520;

    /** @var int */
    const GARMIN_VENU_2_PLUS = 521;

    /** @var int */
    const GARMIN_HRM_PRO = 522;

    /** @var int */
    const GARMIN_FENIX_7_SAPPHIRE_SOLAR = 523;

    /** @var int */
    const GARMIN_FENIX_7_X_SAPPHIRE_SOLAR = 524;

    /** @var int */
    const GARMIN_D_2_DELTA_P_X = 525;

    /** @var int */
    const GARMIN_DESCENT_MK_2_S = 526;

    /** @var int */
    const GARMIN_FENIX_6_S_SOLAR = 527;

    /** @var int */
    const GARMIN_FENIX_6_S_PRO_SOLAR = 528;

    /** @var int */
    const GARMIN_FENIX_6_PRO_SOLAR = 529;

    /** @var int */
    const GARMIN_FORERUNNER_45_PLUS = 530;

    /** @var int */
    const GARMIN_APPROACH_S_42 = 531;

    /** @var int */
    const GARMIN_EPIX_2 = 532;

    /** @var int */
    const GARMIN_D_2_AIR = 533;

    /** @var int */
    const GARMIN_FENIX_7_S_SAPPHIRE_SOLAR = 534;

    /** @var int */
    const KIPRUN_500 = 535;

    /** @var int */
    const SUUNTO_5_PEAK = 536;

    /** @var int */
    const SUUNTO_ZOOP_NOVO = 537;

    /** @var int */
    const SUUNTO_VYPER_NOVO = 538;

    /** @var int */
    const POLAR_GRIT_X_PRO = 539;

    /** @var int */
    const POLAR_PACER = 540;

    /** @var int */
    const POLAR_PACER_PRO = 541;

    /** @var int */
    const GARMIN_VIVO_SMART_5 = 542;

    /** @var int */
    const GARMIN_DESCENT_G_1 = 543;

    /** @var int */
    const GARMIN_FORERUNNER_225_S_MUSIC = 544;

    /** @var int */
    const GARMIN_FORERUNNER_225_MUSIC = 545;

    /** @var int */
    const GARMIN_VIVO_MOVE_SPORT = 546;

    /** @var int */
    const GARMIN_INSTINCT_2_S = 547;

    /** @var int */
    const GARMIN_FORERUNNER_955_SOLAR = 548;

    /** @var int */
    const GARMIN_FORERUNNER_955 = 549;

    /** @var int */
    const GARMIN_EDGE_1040_SOLAR = 550;

    /** @var int */
    const GARMIN_FORERUNNER_255 = 551;

    /** @var int */
    const GARMIN_FORERUNNER_255_S = 552;

    /** @var int */
    const GARMIN_INSTINCT_2_SOLAR_ONE_PIECE_LUFFY = 553;

    /** @var int */
    const CYCPLUS_M1 = 554;

    /** @var int */
    const CYCPLUS_M2 = 555;

    /** @var int */
    const DABUZIDUO_XOSS_G_N_3 = 556;

    /** @var int */
    const DABUZIDUO_XOSS_G_N_4 = 557;

    /** @var int */
    const SUUNTO_D_4_I = 558;

    /** @var int */
    const FITCARE_B_C_200 = 559;

    /** @var int */
    const GARMIN_D_2_DELTA_S = 560;

    /** @var int */
    const GARMIN_FENIX_7_X_SOLAR = 561;

    /** @var int */
    const POLAR_IGNITE_3 = 562;

    /** @var int */
    const SUUNTO_D_6_I = 563;

    /** @var int */
    const SUUNTO_9_PEAK_PRO = 564;

    /** @var int */
    const COROS_APEX_2 = 565;

    /** @var int */
    const COROS_APEX_2_PRO = 566;

    /** @var int */
    const APPLE_WATCH_ULTRA = 567;

    /** @var int */
    const APPLE_WATCH_S_E_40_V_2 = 568;

    /** @var int */
    const APPLE_WATCH_S_E_44_V_2 = 569;

    /** @var int */
    const APPLE_WATCH_S_E_40_CELLULAR_V_2 = 570;

    /** @var int */
    const APPLE_WATCH_S_E_44_CELLULAR_V_2 = 571;

    /** @var int */
    const APPLE_WATCH_7_V_41 = 572;

    /** @var int */
    const APPLE_WATCH_7_V_41_CELLULAR = 573;

    /** @var int */
    const APPLE_WATCH_7_V_45_CELLULAR = 574;

    /** @var int */
    const APPLE_WATCH_7_V_45 = 575;

    /** @var int */
    const APPLE_WATCH_8_V_41 = 576;

    /** @var int */
    const APPLE_WATCH_8_V_41_CELLULAR = 577;

    /** @var int */
    const APPLE_WATCH_8_V_45_CELLULAR = 578;

    /** @var int */
    const APPLE_WATCH_8_V_45 = 579;

    /** @var int */
    const COOPSO_B_C_107 = 580;

    /** @var int */
    const COOPSO_B_C_200 = 581;

    /** @var int */
    const KIPRUN_900 = 582;

    /** @var int */
    const POLAR_H_10 = 583;

    /** @var int */
    const SCOSCHE_R_24_H_R_M = 584;

    /** @var int */
    const VDO_M_7_GPS = 585;

    /** @var int */
    const GARMIN_FORERUNNER_965 = 586;

    /** @var int */
    const GARMIN_FORERUNNER_265 = 587;

    /** @var int */
    const GARMIN_MARQ_GOLFER = 588;

    /** @var int */
    const GARMIN_MARQ_GOLFER_2 = 589;

    /** @var int */
    const GARMIN_VENU_SQ_2 = 590;

    /** @var int */
    const GARMIN_MARQ_AVIATOR_2 = 591;

    /** @var int */
    const GARMIN_DESCENT_G_1_SOLAR = 592;

    /** @var int */
    const GARMIN_INSTINCT_CROSSOVER_SOLAR_TACTICAL = 593;

    /** @var int */
    const GARMIN_EDGE_EXPLORE_2 = 594;

    /** @var int */
    const GARMIN_FORERUNNER_265_S = 595;

    /** @var int */
    const GARMIN_ENDURO_2 = 596;
}
