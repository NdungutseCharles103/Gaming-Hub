<?php

    define('HOST', 'loclahost');
    $DB_Name = 'color';
    $DB_user = 'root';
    $DB_password = '';

    $connection = mysqli_connect(HOST, $DB_user, $DB_password, $DB_Name);
    if (!$connection) {
       echo "Error: Unable to connect to MySQL." . PHP_EOL;
    }
?>