<?php

/********************************CDN導轉特例判斷*********************************/

$sHost = '';
if (!empty($_SERVER['HTTP_X_CDN_CW'])) {
    $sHost = 'https://' . $_SERVER['HTTP_X_CDN_CW'];
}

Define('CDN_IP', $sHost);

$sFlashVersion = '';
$sFlashVersionFile = WEB_PATH . 'app/flash/pig/linkstart.json';
if (is_file($sFlashVersionFile)) {
    $aFlashVersion = json_decode(file_get_contents($sFlashVersionFile), true);
    if ($aFlashVersion['v'] != '') {
        $sFlashVersion = $aFlashVersion['v'];
    }
}
Define('FLASH_VERSION', $sFlashVersion);
