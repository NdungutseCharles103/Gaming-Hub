<?php
/*     $one = "";
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
    } */

{
for ($i = 1; $i <= 5; $i++)
{
// inner loop handles indentation
for($k = 5; $k > $i; $k-- )
{
// Print spaces
echo "&nbsp;&nbsp;&nbsp;";
}
// inner loop handles number of stars
for($j = 1; $j <= $i; $j++ )
{
// Print characters
echo chr(64+$j)." ";
}
for($j = $i-1; $j >= 1; $j-- )
{
// Print characters
echo chr(64+$j)." ";
}
echo "<br>";
}
}

?>
