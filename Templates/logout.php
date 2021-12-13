<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include_once('defaults/head.php');
?>
<body>
<div class="container-fluid background">
<?php
  include_once('defaults/menu.php');
?>
<form action="" method="post">
<button type="submit" class="btn2" name="logout">Logout</button>
</form>
<?php
 if(isset($_POST['logout'])){
    session_destroy();
    header("Location: /home");
 }
?>

<?php
    include_once ('defaults/footer.php');
?>
</div>
</body>
</html>