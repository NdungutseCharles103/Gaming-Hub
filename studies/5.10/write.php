<?php
    $districts = fopen("districts.txt", "a") or die("Unable to open the file");
    $district = "\n101, 01, kicukiro";
    fwrite($districts, $district);
    fclose($districts);
?>