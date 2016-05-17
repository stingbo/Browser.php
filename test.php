<?php
require 'lib/Browser.php';

$browser = new Browser();

$name = $browser->getBrowser();
$plat = $browser->getPlatform();
$vers = $browser->getVersion();
$mobi = $browser->isMobile();
$tabl = $browser->isTablet();
$robo = $browser->isRobot();
$wech = $browser->isWechat();

echo '浏览器名称:' . $name . '<br/>';
echo '平台版本:' . $plat . '<br/>';
echo '版本号:' . $vers . '<br/>';
if ($mobi === true) {
    echo '是否是手机:是<br/>';
} else {
    echo '是否是手机:否<br/>';
}
if ($tabl === true) {
    echo '是否是平板:是<br/>';
} else {
    echo '是否是平板:否<br/>';
}
if ($robo === true) {
    echo '是否是机器人:是<br/>';
} else {
    echo '是否是机器人:否<br/>';
}
if ($wech === true) {
    echo '是否是微信访问:是<br/>';
} else {
    echo '是否是微信访问:否<br/>';
}

