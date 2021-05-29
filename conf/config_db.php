<?php

$db_port	  = intval(getenv('db_port')) ?: 5432;
$db_host	  = getenv('db_host') ?: "127.0.0.1";
$db_name	  = getenv('db_name') ?: "__DB_NAME__";
$db_type 	  = getenv('db_type') ?: "mysql";
$db_user 	  = getenv('db_user') ?: "__DB_USER__";
$db_pass 	  = getenv('db_pass') ?: "__DB_PASSWORD__";
$dsn	      = $db_type . ":dbname=" . $db_name . ";host=" . $db_host . ";port=" . $db_port;

/* Uncomment the line below to set date.timezone to avoid E.Notice raise by strtotime() (in Pdo.php)
 * If date.timezone is not defined in php.ini or with this function, Mattermost could return a bad token request error
*/
//date_default_timezone_set ('Europe/Paris');
