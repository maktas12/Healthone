<?php
function getProducts(int $categoryId)
{
    global $pdo;
    $query = $pdo->prepare(query: "SELECT * FROM product WHERE category_id = $categoryId");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS,'Category'); 
    return $result;

}

function getProduct(int $productId)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM product WHERE id = :id");
    $query->bindParam("id", $productId);
    $query->execute();
    $request = $query->fetch(PDO::FETCH_ASSOC);
    return $request;
}

function getAllproducts():array
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM product ORDER BY category_id');
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'Product');
}
