<?php
    $result = array('');
    $provinceDetails =array(array("KIGALI",3,"50SQM"), 
    array("EASTERN",3,'40QSM'), array("WESTERN",3,"30SQM"),
     array("NORTHERN",3,"20SQM"));

     
     for($i=0;$i<count($provinceDetails);$i++){
         echo "<br/>";
         for($j=0; $j< count($provinceDetails[$i]); $j++){
            echo $provinceDetails[$i][$j].",";
         }
     }
?>