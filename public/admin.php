<?php

global $params;
// check if admin
if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'){
    switch ($params[2]) {
        case 'products';
        $products = getAllproducts();
        include_once '../templates/admin/products.php';
        break;
    }
}else {
    // if not admin
    include_once '../templates/404.php';
}

