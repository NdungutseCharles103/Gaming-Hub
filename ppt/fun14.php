<?php
$age=array("Peter"=>"2","Ben"=>"37","Joe"=>"143");
# arsort sorts an array in a descending order.
arsort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>
