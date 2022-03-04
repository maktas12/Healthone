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
        <?php if (!empty($message)): ?>
            <div class="alert alert-succes" role="alert">
                <?=$message ?>
            </div>
        <?php endif;?>
        <form class="row g-3" method="post">    
            <div class="col-md-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail"
                value="<?php if(isset($_SESSION['email']->email)) {echo $_SESSION['email']->email;} else {echo "";} ?>">
            </div>
            <div class="col-md-6">
                <label for="inputFirstName" class="form-label">First name</label>
                <input type="text" name="firstName" class="form-control" id="inputFirstName"
                value="<?php if(isset($_SESSION['first-name']->first_name)) {echo $_SESSION['first-name']->first_name;} else {echo "";} ?>">
            </div>
            <div class="col-md-6">
                <label for="inputLastName" class="form-label">Last name</label>
                <input type="text" name="lastName" class="form-control" id="inputLastName"
                value="<?php if(isset($_SESSION['last-name']->last_name)) {echo $_SESSION['last-name']->last_name;} else {echo "";} ?>"> 
            </div>
            <div class="col-12">
                <button type="submit" name="profile" class="btn btn-primary">Aanpassen profiel</button>
            </div>
        </form>
        <hr>
        <?php
        include_once('defaults/footer.php');
        ?>
        </div>
    </body>
</html>