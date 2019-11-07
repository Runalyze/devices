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
    const GARMIN_FORERUNNER_935_X_T = 23;

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
    const AMAZFIT_UNKNOWN = 164;

    /** @var int */
    const AMAZFIT_BIP = 165;

    /** @var int */
    const AMAZFIT_BIP_LITE = 166;

    /** @var int */
    const AMAZFIT_G_T_R = 167;

    /** @var int */
    const AMAZFIT_G_T_S = 168;

    /** @var int */
    const AMAZFIT_NEXO = 169;

    /** @var int */
    const AMAZFIT_VERGE_LITE = 170;

    /** @var int */
    const AMAZFIT_PACE = 171;

    /** @var int */
    const AMAZFIT_STRATOS = 172;

    /** @var int */
    const AMAZFIT_STRATOS_PLUS = 173;

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
}
