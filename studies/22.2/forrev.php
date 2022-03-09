<?php
echo"<h1> For loop for a single array</h1>";
$marks = [32, 23, 23,45,23];
for($i=0; $i<count($marks); $i++) {
    echo"The marks at index $i is".$marks[$i]."<br/>";
}
$scores = array(
    array(10, 11, 12, 13, 14, 15),
    array(20, 21, 22, 23, 24, 25),
    array(30, 31, 32, 33, 34, 35)
);

echo"<h1> Multidimensional</h1>";
for($i=0; $i<count($scores); $i++) {
    for($j=0; $j<count($scores[$i]); $j++) {
        echo "The scores at index i=$i and j=$j is ".$scores[$i][$j]."<br>";
    }
}
?>