<?php
for ($i = 1; $i <= 10; $i++){
for($j = 1; $j <= $i; $j++ ){
echo $j." ";
}
for($j = $i-1; $j >= 1; $j-- ){
echo $j." ";
}
echo "\n";
}


?>
