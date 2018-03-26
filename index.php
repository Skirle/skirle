<?php
session_start();
if(! isset($_SESSION['cart']))
{
    $_SESSION['cart'] = array();
}
include_once '/config/config.php';
include_once '/library/mainFunctions.php';
include_once '/config/db.php';

var_dump($_GET);
//Если в адресе строки есть контроллер присваиваем его переменной,если не существует присваиваем Index;
if(isset($_GET['controller']))
{
    $controllerName = ucfirst($_GET['controller']);
}
else
{
    $controllerName = 'Index';
}


if(isset($_GET['action']))
{
    $actionName = $_GET['action'];
}
else
{
    $actionName = index;
}
$cartCntItems = count($_SESSION['cart']);
loadPage($controllerName, $actionName);
