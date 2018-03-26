<?php

include_once '/models/CategoriesModel.php';
include_once '/models/ProductsModel.php';


function indexAction()
{
    $rsCategory = getAllMainCatsWithChildren();
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($catId == null) exit();
    $cartCntItems = count($_SESSION['cart']);
    $rsProducts = null;
    $rsChildCats = null;
    $rsCategories = getCatById($catId);
   
    if ($rsCategories['parent_id'] == 0)
    {
        $rsChildCats = getChildrenForCat($catId);
    } else{
        $rsProducts = getProductByCat($catId);
    }
    include_once '/views/default/header.php';
    include_once '/views/default/category.php';
    include_once '/views/default/leftcolumn.php';
    include_once '/views/default/footer.php';
}

