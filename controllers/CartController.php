<?php

include_once '/models/CategoriesModel.php';
include_once '/models/ProductsModel.php';


function addtocartAction()
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (! $itemId) return false;
    $resData = array();
    if (isset($_SESSION['cart']) and array_search($itemId, $_SESSION['cart']) === false)
    {
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else{
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}

function removefromcartAction()
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (! $itemId) return false;
    $resData = array();
    $key = array_search($itemId, $_SESSION['cart']);
    if ($key !==false){
        unset($_SESSION['cart'][$key]);
        $resData['success'] = 1;
        $resData['cntItems'] = count($_SESSION['cart']);
    } else{
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}


function indexAction()
{
    $cartCntItems = count($_SESSION['cart']);
    $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    $rsCategory = getAllMainCatsWithChildren();
    $rsProducts = getProductsFromArray($itemsIds);
    include_once '/views/default/header.php';
    include_once '/views/default/cart.php';
    include_once '/views/default/leftColumn.php';
    include_once '/views/default/footer.php';
}

