<?php
date_default_timezone_set('GMT');
require('twitterbot.php');

header('Content-Type: text/html;charset=utf-8');
echo "ok";
$twitter = new TwitterBot('credential0', 'credential1');
echo "ok2";
$twitter->setToken('credential3', 'credential4');
echo "ok3";
$twitter->test();
echo "ok4";
?>
