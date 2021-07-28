<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            if(isset($_COOKIE['name']) && !empty($_COOKIE['name'])){
                echo "<p>Hello ". $_COOKIE['name']."<a href='deletecookie.php'><br />Delete Cookie</a></p>";
            }else{
            // Set the cookie at below in form
        ?>
            <form action="setcookie.php" method="post">
                Write here a name: <input type="text" name="name" />
                <input type="submit" name="Send" />
            </form>
        <?php
            // This is the else statement end tag
            }
        ?>
    </body>
</html>