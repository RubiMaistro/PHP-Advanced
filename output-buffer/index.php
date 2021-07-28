<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        function callback($buffer){
            return (str_replace("driving", '<span style="text-transform:uppercase;"><b>driving</b></span>', $buffer));
        }
            ob_start("callback");
        ?>
        <p>I’m on my way, driving at 90 down those country lanes
        Singing to Tiny Dancer, And I miss the way you make me feel, and it’s real
        When we watched the sunset over the castle on the hill.</p>
        <?php
            ob_end_flush();
        ?>
    </body>
</html>