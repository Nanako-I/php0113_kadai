<?php
session_start();

$name = $_SESSION['name'];
$age = $_SESSION['age'];

echo $name;
echo $age;
// Fukushima12と表示される↑
// session01をブラウザで開いてからsession02をブラウザで開くようにする