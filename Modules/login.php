<?php

function saveLogin($userName, $password) {
    global $pdo;
    $sth = $pdo->prepare('INSERT INTO login (first_name, password) VALUES (:userName, :password) ');  
    $sth->bindParam("userName", $userName);   
    $sth->bindParam("password", $password);
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