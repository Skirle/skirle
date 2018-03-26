<?php

include_once '/models/CategoriesModel.php';
include_once '/models/ProductsModel.php';

function indexAction()
{
    $rsCategory = getAllMainCatsWithChildren();
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($itemId == null) exit();
    $rsProduct = getProductById($itemId);
    $rsCategories = getAllMainCatsWithChildren();
    $cartCntItems = count($_SESSION['cart']);
    $itemInCart = 0;
    if(in_array($itemId, $_SESSION['cart']))
    {
        $itemInCart = 1;
    }
    include_once '/views/default/header.php';
    include_once '/views/default/product.php';
    include_once '/views/default/leftcolumn.php';
    include_once '/views/default/footer.php';
}

