<?php

global $params;

// check if admin
if(isset($_SESSION['role']) && $_SESSION['role'] === 'member'){
    switch ($params[2]) {

    case 'home':
        $name = $_SESSION['first-name'];
        $imgs = $_SESSION['img'];
        include_once '../Templates/memberhome.php';
        break;

        case 'profileview':
            $email = $_SESSION['email'];
            $name = $_SESSION['first-name'];
            $last = $_SESSION['last-name'];
            include_once '../Templates/profileview.php';
            break;


        case 'profile':
            $titleSuffix = ' | Profile';
        
            if(isset($_POST['profile'])) {
                $result = changeProfile();
                echo "gelukt";
            } else {
                echo "niet gelukt";
            }
            include_once '../Templates/profile.php';
            break;
    }
}else {
    // if not admin
    include_once '../templates/404.php';
}
?>