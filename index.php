<?php
    class MyClass
    {
        const constant = 'constant value';
        
        //This is function of my code
        function showConstant(){
            echo self::constant."\n";
        }
    }

    echo MyClass::constant."\n";
?>
