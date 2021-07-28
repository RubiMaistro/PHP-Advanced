<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            // A session stored in a temporary storage
           if(!isset($_SESSION['count'])){
               $_SESSION['count'] = 0;
               echo $_SESSION['count'];
           }else{
               echo ++$_SESSION['count'];
           }
        ?>
    </body>
</html>