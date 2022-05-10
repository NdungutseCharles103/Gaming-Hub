<?php
$districts = fopen("districts.txt", "w+");
$district = "101, 01, kicukiro";
fwrite($districts, $district);
fclose($districts);
?>