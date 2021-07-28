<?php
    setcookie('name', '', time()-3600); //Remove cookie
    header('Location: index.php');
?>