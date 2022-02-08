<?php
$age=array("Peter"=>"45","Ben"=>"37","Joe"=>"3");
# asort sorts an array in ascending order.
asort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>
