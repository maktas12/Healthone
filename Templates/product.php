<!DOCTYPE html>
<html>
<?php
  include_once('defaults/head.php');
?>
<body>
<div class="container-fluid background">
  <?php
    include_once('defaults/menu.php');
  ?>
  <?php
    echo "<h3 class='prot'>" . $product['name'] . "</h3>";
    echo "<img class='card-img prods' src=" . $product['picture'] . ">";
    echo "<p class='prot2'>" . $product['description'] . "</p>"; 
  ?>
  <form method="post" action="">
    <label>Name:</label>
    <input name="name" type="text"><br>
    <label>Review:</label>
    <textarea name="content" type="text"></textarea><br>
    <label>Stars:</label>
    <div class="rate">
      <input type="radio" name="rating" value="5">
      <label for="star5" title="text">5 stars</label>
      <input type="radio" name="rating" value="4">
      <label for="star4" title="text">4 stars</label>
      <input type="radio" name="rating" value="3">
      <label for="star3" title="text">3 stars</label>
      <input type="radio" name="rating" value="2">
      <label for="star2" title="text">2 stars</label>
      <input type="radio" name="rating" value="1">
      <label for="star1" title="text">1 star</label>
      <input name="submit" type="submit" value="Submit">
    </div>
</form>
  
  <?php
        $review = getReview();
        foreach($review as &$data){
          echo"name : $data->name <br>";
          echo"review: $data->content <br>";
          echo"how many stars: $data->rating";
        }
  
  ?>
</div>
</body>
</html>



