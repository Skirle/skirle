<?php

function loadPage($controllerName, $actionName = 'index'){
	
	include_once PathPrefix . $controllerName . PathPostfix;
   
    $function = $actionName . 'Action';
    $function();
}


function createRsArray($rs)
{
    if (! $rs) return false;
    $smartyRs = array();
    while ($row = mysql_fetch_assoc($rs)){
        $smartyRs[] = $row;
    }
    return $smartyRs;
}

