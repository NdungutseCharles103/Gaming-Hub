<?php
$students = array(
array('name' => 'John', 'group' => 'A','age'=>16),
array('name' => 'Mary', 'group' => 'B','age'=>14),
array('name' => 'Laura', 'group' => 'A','age'=>15)
);

    for($i=0; $i<count($students); $i++){
        for($j=0; $j<count($students[$i]); $j++){
            echo $students[$i][$j];
        }
    }
?>
