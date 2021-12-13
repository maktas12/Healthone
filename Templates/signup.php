
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
    <form method="post" action="">
        <label>Name:</label>
        <input name="userName" type="text" required><br>
        <label>password:</label>
        <textarea name="password" type="text" required></textarea><br>
        <input name="send" type="submit" value="Submit">
    </form>
    <?php
    ?>

    <?php
        include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>