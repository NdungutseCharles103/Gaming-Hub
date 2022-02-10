<?php
    $one = "";
    $two = "";
    $three = "";
    for($i=1; $i<10; $i++){
        echo "<br/>";
        for($j=1; $j<$i; $j++){
            $one = strval($j);
        }
        for($h=$i; $h>0; $h--){
            $two = strval($h);
            echo  $two;
        }
        echo $one;
    }
    for($i=1; $i<10; $i++){
        echo "<br/>";
        for($j=$i; $j>0; $j--){
            echo "$j";
        }
    }

?>