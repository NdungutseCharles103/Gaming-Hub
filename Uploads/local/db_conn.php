<?php  

$sname = "localhost";
$uname = "root";
$password = "chazard10.3";

$db_name = "db_mis";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}