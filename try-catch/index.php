<?php
    class Num extends Exception {};
    class Par extends Exception {};

    function test($number){
        if(is_numeric($number)){
            if($number % 2 == 0){
                throw new Par("Number is even!<br />");
            }else{
                throw new Par("Number is odd!<br />");
            }
        }else{
            throw new Num("Not a number!<br />");
        }
        return $number;
    }

    $data = "String";

    try{
        echo "Data: $data ". test($data);
    }catch(Num $e){
        echo $e->getMessage();
    }catch(Par $e){
        echo $e->getMessage();
    }


    function callback($errNum, $errMsg, $errFile, $errLine){
        //throw new ErrorException("Error!<br />");
        throw new ErrorException($errMsg, $errNum, 0, $errFile, $errLine);
    }

    set_error_handler("callback");

    try{
        //include 'unknow.php';
        readfile("some.txt");
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>
