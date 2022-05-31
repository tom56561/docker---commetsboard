<?php

/******************************************************************************
*      File: config_inc.php
*      Date: 2018-11-22
*      Descript: 開發站機率客端
*****************************************************************************/

# 判斷home路徑
define('HOME_USER', substr(__FILE__, 6, strpos(__FILE__, '/', 6) - 6));
define('HOME_PATH', empty($_SERVER['HOME_PATH']) ? '/home/' . HOME_USER . '/' : $_SERVER['HOME_PATH']);

# 設定使用權
Define('DEBUG_SHOW', 1);   # 啟動db錯誤訊息
define('LOGINSIGHT', true); # 啟用LogInsgiht紀錄架構log
define('BLACKLISTERROR', []); # 錯誤訊息黑名單內不寫log，參數:array(錯誤層級)，可參考Library\Error\Error $aErrorNo

#Member 新客端
Define('CASINO_MEMBER_COMMON_PATH', HOME_PATH . 'casino_member/');
Define('GENERAL_PATH', HOME_PATH . 'general/');

# RD3系統設定資料
Define('WEB_HOST', $_SERVER[ 'HTTP_HOST' ]);                                        # 網域
Define('BROWSER_IP', 'http://' . WEB_HOST);                                        # 網址
Define('WEB_PATH', HOME_PATH . 'casino_member/www/');                              # 客端
Define('IPL_WEB_PATH', WEB_PATH);                                                  # 客端
Define('__ENV__', 'DEV');                                                          # 系統環境( DEV:開發站、QA:QA站、IPL:正式站、LA:LA站 )

# 登入設定資料
Define('WEB_TIME_ZONE', -4);                                                       # 時區( 美東 )

# Client端資料
Define('REMOTE_ADDR', $_SERVER[ 'REMOTE_ADDR' ]);                                  # Client端網路位置
Define('HTTP_USER_AGENT', $_SERVER[ 'HTTP_USER_AGENT' ]);                          # Client端瀏覽器資訊

// API相關Define
# RD5 - blocker ip
Define('BLOCKER_IP', '10.32.65.7');
Define('BLOCKER_HOSTNAME', 'bb.dev.d3');
Define('BLOCKER_PORT', '80');
# RD5 - Durian
Define('DURIAN_IP', '10.32.65.7');
Define('DURIAN_HOSTNAME', '3.bb.rd5.dev');
Define('DURIAN_PORT', '80');
# DRD - 收單系統API IP
Define('DRD_GET_EXTEND', '10.31.67.73');
Define('DRD_GET_EXTEND_PORT', '20100');
# DRD - 推薦系統
Define('DRD_RECOMMEND_IP', '10.31.67.73');
Define('DRD_RECOMMEND_PORT', '30000');
# RD3 KEY
Define('RD3_KEY', 'ZWQ0YjM2MTNlOTgxNzFkNzQ3ZjZiNzkwMjA3ZDU2MDY=');
# X-From-Cdn
Define('X_FROM_CDN', 'eLkH9RbMcRwjYpNDCBcDhgxsM3fwgKcUSxtDSnY8');
# 雲端服務
Define('CLOUD_ENV', false);

/********************************資料庫設定相關*********************************/
// DB連線帳密
$CDBU = 'dragonborn';
$CDBP = 'fus_ro_dah';
$DBIP = '192.168.141.41';
$DBInfo = array();
$DBInfo[ 'Main' ] = array( 'HOST_M' => $DBIP, 'HOST_S' => $DBIP, 'USER' => $CDBU, 'PWD' => $CDBP, 'NAME' => 'MainDB', 'CHARSET' => 'utf8', 'CLOSE_FLAG' => false);
$DBInfo[ 'Core' ] = array( 'HOST_M' => $DBIP, 'HOST_S' => $DBIP, 'USER' => $CDBU, 'PWD' => $CDBP, 'NAME' => 'CoreDB', 'CHARSET' => 'utf8', 'CLOSE_FLAG' => false);
$DBInfo[ 'Game5' ] = array( 'HOST_M' => $DBIP, 'HOST_S' => $DBIP, 'USER' => $CDBU, 'PWD' => $CDBP, 'NAME' => 'GameDB5', 'CHARSET' => 'utf8', 'CLOSE_FLAG' => false);
$DBInfo[ 'Wagers5_All' ]  = array( 'HOST_M' => '192.168.141.62', 'HOST_S' => '192.168.141.62', 'USER' => $CDBU, 'PWD' => $CDBP, 'NAME' => 'WagersDB5_All', 'CHARSET' => 'utf8', 'CLOSE_FLAG' => false);
$DBInfo[ 'Wagers5' ] = array( 'HOST_M' => $DBIP, 'HOST_S' => $DBIP, 'USER' => $CDBU, 'PWD' => $CDBP, 'NAME' => 'WagersDB5', 'CHARSET' => 'utf8', 'CLOSE_FLAG' => false);
$DBInfo[ 'Wagers5Ex' ] = array( 'HOST_M' => $DBIP, 'HOST_S' => $DBIP, 'USER' => $CDBU, 'PWD' => $CDBP, 'NAME' => 'WagersDB5Ex', 'CHARSET' => 'utf8', 'CLOSE_FLAG' => false);
$DBInfo[ 'Wagers30' ] = array( 'HOST_M' => $DBIP, 'HOST_S' => $DBIP, 'USER' => $CDBU, 'PWD' => $CDBP, 'NAME' => 'WagersDB30', 'CHARSET' => 'utf8', 'CLOSE_FLAG' => false);
$DBInfo[ 'Jackpot' ] = array( 'HOST_M' => $DBIP, 'HOST_S' => $DBIP, 'USER' => $CDBU, 'PWD' => $CDBP, 'NAME' => 'JackpotDB', 'CHARSET' => 'utf8', 'CLOSE_FLAG' => false);
$DBInfo[ 'ReportRole' ] = array('HOST_M' => $DBIP, 'HOST_S' => $DBIP, 'USER' => $CDBU, 'PWD' => $CDBP, 'NAME' => 'ReportDB_new', 'CHARSET' => 'utf8', 'CLOSE_FLAG' => false);

# Redis
$RBP_IPL = 'q96ej3z04';
$RBInfo = array();
$RBInfo[ 'MachineInfo' ] = array( 'HOST_M' => '103.241.238.143', 'HOST_S' => '103.241.238.143', 'PORT' => '6379', 'AUTH' => $RBP_IPL, 'INDEX' => '2');
$RBInfo[ 'Central5' ] = array( 'HOST_M' => '103.241.238.143', 'HOST_S' => '103.241.238.143', 'PORT' => '6379', 'AUTH' => $RBP_IPL, 'INDEX' => '5');
$RBInfo[ 'Central30' ] = array( 'HOST_M' => '103.241.238.143', 'HOST_S' => '103.241.238.143', 'PORT' => '6379', 'AUTH' => $RBP_IPL, 'INDEX' => '8');
$RBInfo[ 'Platform' ] = array( 'HOST_M' => '103.241.238.143', 'HOST_S' => '103.241.238.143', 'PORT' => '6379', 'AUTH' => $RBP_IPL, 'INDEX' => '0');
$RBInfo[ 'UserSID5' ] = array( 'HOST_M' => '103.241.238.143', 'HOST_S' => '103.241.238.143', 'PORT' => '6379', 'AUTH' => $RBP_IPL, 'INDEX' => '10');
$RBInfo[ 'Member5' ] = array( 'HOST_M' => '103.241.238.143', 'HOST_S' => '103.241.238.143', 'PORT' => '6379', 'AUTH' => $RBP_IPL, 'INDEX' => '12');

include_once('config_env.php');
