<?php

function saveReview($content, $rating, $product_id) {
    global $pdo;
    $sth = $pdo->prepare('INSERT INTO review (name, content, rating, product_id, user_id) VALUES (:name, :content, :rating, :product_id, :user_id) ');
    $sth->bindParam("name", $_SESSION['first-name']);
    $sth->bindParam("content", $content);
    $sth->bindParam("rating", $rating);
    $sth->bindParam("product_id", $product_id);
    $sth->bindParam("user_id", $_SESSION['id']);
    $sth->execute();
}

function getReview(int $product_id)
    {
        global $pdo;
        $query = $pdo->prepare(query: "SELECT * FROM review WHERE product_id = :product_id");
        $query->bindParam("product_id", $product_id);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_CLASS,'Review');
        return $result;
    
}
    
