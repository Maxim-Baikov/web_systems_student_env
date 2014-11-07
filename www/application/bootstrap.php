<?php

require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
$dbhost = "localhost";
$dbusername = "root";
$dbpass = "root";
$dbname = "webdb";

$dbconnect = mysql_connect($dbhost, $dbusername, $dbpass);
if (!$dbconnect) {
    echo("Не могу подключиться к серверу базы данных!");
}

if (@mysql_select_db($dbname)) {
    echo "";
} else die ("Не могу подключиться к базе данных $dbname!");

require_once 'core/route.php';
Route::start();
