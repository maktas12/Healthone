<?php

function saveReview($name, $content, $rating, $product_id) {
    global $pdo;
    $sth = $pdo->prepare('INSERT INTO review (name, content, rating, product_id) VALUES (:name, :content, :rating, :product_id) ');
    $sth->bindParam("name", $name);   
    $sth->bindParam("content", $content);
    $sth->bindParam("rating", $rating);
    $sth->bindParam("product_id", $product_id);
    $sth->execute();

}

function getReview()
    {
        global $pdo;
        $query = $pdo->prepare(query: "SELECT * FROM review");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_CLASS,'Review');
        return $result;
    
    }