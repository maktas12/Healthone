<?php

global $params;
// check if admin
if(isset($_SESSION['role']) && $_SESSION['role'] === 'member'){
    switch ($params[2]) {


    case 'home':
        var_dump('test');
        include_once '../Templates/memberhome.php';
        break;
    }
}else {
    // if not admin
    include_once '../templates/404.php';
}
?>
