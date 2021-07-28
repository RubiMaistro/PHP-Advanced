<?php
    /** TO DO: Start the output-buffer.
     *  USE WHEN: If it use header() in the PHP and 
     *  If there is something else data in the HTML.
     * */
    ob_start();
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <div>
            <h1>This is the INDEX page.</h1>
        </div>
        <?php
            header('Location: header.php');
        ?>
    </body>
</html>