<?php
 
  include_once ('./../common/init.php');
  //include_once ($BASE_DIR . 'database/tweets.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title>Page Title</title>
        <link rel="stylesheet" type="text/css"  href="<?=$BASE_URL?>/css/style.css">
    </head>

    <body>
    <?php include('header.php') ?>        
                
                <div class="recent">
                <section id="register">
  <h2>Register</h2>

  <form action="{$BASE_URL}actions/users/register.php" method="post">
    <label>Realname: <input type="text" name="realname" value=""></label>
    <label>Username: <input type="text" name="username" value=""></label>
    <label>Password: <input type="password" name="password" value=""></label>
    <input type="submit" value="Register">
  </form>

</section>

                </div>
                
                <?php include('footer.php') ?>
            </div>
        </div>
    </body>
</html>