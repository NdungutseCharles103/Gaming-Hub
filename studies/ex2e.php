
<?php
for ($i = 10; $i>0; $i--){
for($k = 10; $k > $i; $k-- ){
echo "&nbsp;&nbsp;";
}
for($j = 0; $j < $i; $j++ ){
echo "*";
}
echo "<br>";
}
?>