<?php
$students = array(
array('name' => 'John', 'group' => 'A','age'=>16),
array('name' => 'Mary', 'group' => 'B','age'=>14),
array('name' => 'Laura', 'group' => 'A','age'=>15)
);
for($i=0;$i<$students.count($students); $i++) {
    foreach ($students[$i] as $name => $n_value) {
    echo "name" . $name . "age" . $n_value;
}
}

?>