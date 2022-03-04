<?php

function saveLogin($userName, $password, $role, $last_name, $email, $img) {
    global $pdo;
    $sth = $pdo->prepare('INSERT INTO login (first_name, password, role, last_name, email , img) VALUES (:userName, :password, :role, :last_name, :email, :img) ');  
    $sth->bindParam("userName", $userName);   
    $sth->bindParam("password", $password);
    $sth->bindParam("last_name", $last_name);
    $sth->bindParam("role", $role);
    $sth->bindParam("email", $email);
    $sth->bindParam("img", $img);
    $sth->execute();

}


function checklogin(string $username, string $password){
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM login WHERE first_name = :u AND password = :p');
    $sth->bindParam("u", $username);
    $sth->bindParam("p", $password);
    $sth->setFetchMode(PDO::FETCH_CLASS, Login::class);
    $sth->execute();
    return $sth->fetch();
}

function fileuPloadsignup():bool
{
    global $message1;    
    //check file extension
    $allowed=['gif','png','jpg'];
    $filename=$_FILES['img']['name']; //original filename
    $ext=pathinfo($filename,PATHINFO_EXTENSION);
    if (!in_array($ext,$allowed) || exif_imagetype($_FILES['img']['tmp_name'])===false) {
        $message1="Sorry alleen gif,png of jpg files toegestaan";
        return false;
    }

    //rename file to unique name
    $target_dir= "img/signup/";
    $target_file= $_FILES['img']['name'];
    do {
        $target_file=$target_dir.md5($target_file).".$ext";
    } while (file_exists($target_file));

    //move uploaded file
    if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
        $message1= $target_file;
        return true;
    } else {
        $message1.="Sorry, upload niet gelukt";
        return false;
    }
}

function changeProfile():bool
{
    global $pdo;
    $email=filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $firstName=filter_input(INPUT_POST, "firstname");
    $lastName=filter_input(INPUT_POST, "lastname");

    if($email!==false && !empty($firstName) && !empty($lastName)) {
        $sth = $pdo->prepare('UPDATE login SET (first-name, last-name) VALUES (:first-name, :last-name) WHERE email=:e');
        $sth->bindValue(":f", $firstName);
        $sth->bindValue(":l", $lastName);
        $sth->bindValue(":e", $email);
        $sth->execute();
        $_SESSION['first-name']->first_name=$firstName;
        $_SESSION['last-name']->last_name=$lastName;
        return true;
    } else {
        return false;
    }
}