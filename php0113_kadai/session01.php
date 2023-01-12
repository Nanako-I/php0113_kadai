<?php
session_start();

// $_SESSION[]は連想配列　[]内はキー　＝の後は値
$_SESSION['name'] = 'Fukushima';
$_SESSION['age'] = '12';

$sid=session_id();
echo $sid;