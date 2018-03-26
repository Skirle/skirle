<?php

function getChildrenForCat($catId)
{
    $sql = "SELECT *
            FROM category
            WHERE
            parent_id = '{$catId}'";
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}




function getAllMainCatsWithChildren()
{
    $sql = 'SELECT *
            FROM category
            WHERE parent_id = 0';
    $rs = mysql_query($sql);
    $smartyRs = array();
    while ($row = mysql_fetch_assoc($rs))
    {
        $rsChildren = getChildrenForCat($row['id']);
        if($rsChildren){
            $row['children'] = $rsChildren;
        }
        $smartyRs[] = $row;
    }
    return $smartyRs;
}

function getCatById($catId)
{
    $catId = intval($catId);
    $sql = "SELECT *
            FROM category
            WHERE
            id = {$catId}";
    $rs = mysql_query($sql);
    return mysql_fetch_assoc($rs);
}

