<?php

include_once '/models/CategoriesModel.php';
include_once '/models/ProductsModel.php';


function indexAction(){
    $pageTitle = "Главная страница сайта";
    $rsCategory = getAllMainCatsWithChildren();
    $rsProducts = getLastProducts(16);
    include_once '/views/default/header.php';
    include_once '/views/default/index.php';
    include_once '/views/default/leftcolumn.php';
    include_once '/views/default/footer.php';
}

