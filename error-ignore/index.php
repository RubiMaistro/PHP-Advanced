<?php
    /**
     * If you use the AT SIGN before something then the error is disappear,
     * but just the page.
     * This is not a real error handling, just make it invisible the errors.
     */
    @include 'unknow.php';
    
    /**
     * When you use the error_reporting then if you write something wrong
     * then no error occurs.
     */
    error_reporting(0);
    include 'unknow2.php';
    // Error examples below
    // You can use ; in the end
    asdasd;
    nothing;
?>
