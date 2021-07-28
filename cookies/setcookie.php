<?php
    if(isset($_POST['name']) && !empty($_POST['name'])){
        /**
         * Setcookie parameters:
         * 1. name: cookie's name
         * 2. value: cookie's value: in ex. an username
         * 3. expire: in ex. the life-time is 3600sec = 1hour
         * 4. path: where can i get it?
         * 5. domain: the cookie can go through what kind of connection (0 or 1) (false or true) 0 is not too secure
         * 6. secure: -
         * 7. httponly: -
         */
        setcookie('name', $_POST['name'], time()+3600, '/', $_SERVER['SERVER_NAME'], 0); 
    }
    header('Location: index.php');

?>