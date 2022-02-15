<?php
/* Example 1
 * This is an array with some data we want to print
 * when running through the for loop.
 */
$students = array(
 array('name' => 'John', 'group' => 'A','age'=>16),
 array('name' => 'Mary', 'group' => 'B','age'=>14),
 array('name' => 'Laura', 'group' => 'A','age'=>15)
);

for($i = 0; $i < count($students); ++$i) {
echo "The name is ". $students[$i]['name']. " in group".$students[$i]['group']. "and
age".$students[$i]['age']."<br>";
}
?>