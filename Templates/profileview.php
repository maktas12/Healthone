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
            <h5> Member Profile</h5>
            <div class="profile">
            <?php
                echo "<table>
                <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>email</th>
                </tr>
                <tr>
                  <td>$name</td>
                  <td>$last</td>
                  <td>$email</td>
                </tr>
              </table>"
              ;
            ?>  
            <a class='nextPage' href='/member/profile'>profile change</a>
            </div>
            <?php
                include_once('defaults/footer.php');
            ?>
        </div>
    </body>
</html>