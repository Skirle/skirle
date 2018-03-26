<?php

function getLastProducts($limit = null)
{
    $sql = "SELECT *
            FROM `product`
            ORDER BY id DESC";
    if($limit)
    {
        $sql .= " LIMIT $limit";
    }
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
            
}

function getProductByCat ($itemId)
{
    $itemId = intval($itemId);
    $sql = "SELECT *
            FROM product
            WHERE category_id = {$itemId}";
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}

function getProductById($itemId)
{
    $itemId = intval($itemId);
    $sql = "SELECT *
            FROM product
            WHERE id = {$itemId}";
    $rs = mysql_query($sql);
    return mysql_fetch_assoc($rs);
}

function getProductsFromArray($itemIds)
{
    $strIds = implode($itemIds, ', ');
    $sql = "SELECT *
            FROM product
            WHERE id in ({$strIds})"; //Находится в диапазоне
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}

