<?php

function saveLogin($userName, $password, $role) {
    global $pdo;
    $sth = $pdo->prepare('INSERT INTO login (first_name, password, role) VALUES (:userName, :password, :role) ');  
    $sth->bindParam("userName", $userName);   
    $sth->bindParam("password", $password);
    $sth->bindParam("role", $role);
    $sth->execute();

}


function checklogin(string $username, string $password){
    global $pdo;
    $sth = $pdo->prepare('SELECT email , first_name , last_name , role FROM login WHERE first_name = :u AND password = :p');
    $sth->bindParam("u", $username);
    $sth->bindParam("p", $password);
    $sth->setFetchMode(PDO::FETCH_CLASS, Login::class);
    $sth->execute();
    return $sth->fetch();
}