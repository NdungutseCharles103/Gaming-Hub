<?php
define('HOST', "localhost");
$DB_host = "localhost";
$DB_user = "root";
$DB_password = "chazard10.3";
$DB_name = "db_mis";

$connection = mysqli_connect($DB_host, $DB_user, $DB_password, $DB_name);

if (!$connection) {
    echo "Unable to connect".mysqli_connect_error();
};
