
<?php
for ($i = 1; $i<10; $i++){
for($k = 10; $k >$i; $k-- ){ 
echo "&nbsp;&nbsp;&nbsp;";
}
for ($j = 1; $j < $i; $j++ ){
    echo $j." ";
}
for($j = $i; $j >=1; $j-- ){
echo "$j"." " ;
}
echo "<br>";
}
?>