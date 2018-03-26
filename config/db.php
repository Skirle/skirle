<?php

$dblocation = "localhost";
$dbname = "shop";
$dbuser = "root";
$dbpass = "123";

$db = mysql_connect($dblocation, $dbuser, $dbpass);
mysql_set_charset('utf8');

if(! $db)
{
    echo "Ошибка доступа к Mysql";
    exit();
}
if (! mysql_select_db($dbname,$db))
{
    echo "Ошибка доступа к базе данных ($dbname)";
    exit();
}
