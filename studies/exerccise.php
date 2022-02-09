<?php
    $result = array('');
    $provinceDetails =array(array("KIGALI",3,"50SQM"), 
    array("EASTERN",3,'40QSM'), array("WESTERN",3,"30SQM"),
     array("NORTHERN",3,"20SQM"));
/* 
     for($i=0;$i< count($provinceDetails);$i++){
         $next = $provinceDetails[$i];
         $result += $next;
        for($j=0;$j< count($next); $j++){
            $next1 = $next[$j];
           $result += $next1[$j]; 
          array_push($result,$next1);
        }
     }
     echo $result;
     print_r($result); */
     
     for($i=0;$i<count($provinceDetails);$i++){echo " , ";
         for($j=0; $j< count($provinceDetails[$i]); $j++){
            echo $provinceDetails[$i][$j].=":";
         }
     }
?>