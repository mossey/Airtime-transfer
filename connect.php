<?php

$hostname = "localhost";
$username = "root";//root
$password = "";//""
$connection =  mysql_connect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db("online_airtime");



?>