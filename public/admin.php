<?php

global $params;
// check if admin
if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'){
    switch ($params[2]) {
        case 'products';
        if(isset($_GET['product_id']) && isset($_GET['delete'])){
            $productId = $_GET['product_id'];
            $delete = $_GET['delete'];
            if($delete) {
                deleteProduct($productId);
            }
        }
        $products = getAllproducts();
        include_once '../templates/admin/products.php';
        break;
    }
}else {
    // if not admin
    include_once '../templates/404.php';
}

