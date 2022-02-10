
<?php
for ($i = 9; $i>0; $i--){
for($k = 10; $k > $i+1; $k-- ){
echo "&nbsp;&nbsp;&nbsp;";
}
for($j = 0; $j < $i; $j++ ){
echo "* ";
}
echo "<br>";

}
?>