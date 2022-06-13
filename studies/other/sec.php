<?php
    /* function oddCheck($a){
        if($a%2==0){
            echo "$a is even number";
        }
        else {
            echo "$a is an odd number";
        }
    }
    oddCheck(4); */
    function oddCheck($a){
        if($a%2==0):
            echo "$a is even number";
            $pow = $a**4;
            echo " if $a raise to power of 4 we get $pow ";
        
        else: 
            echo "$a is an odd number";
        endif;   
        
    }
    oddCheck(4);

    ?>