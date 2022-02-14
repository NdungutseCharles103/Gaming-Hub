
<?php
for ($i = 9; $i>0; $i--){
for($k = 9; $k > $i; $k-- ){
echo "&nbsp;&nbsp;";
}
for($j = 0; $j < $i; $j++ ){
echo "*";
}
echo "<br>";
}
?>