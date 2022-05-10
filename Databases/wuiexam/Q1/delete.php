<?php

define('HOST', 'localhost');
$user = 'root';
$userpass = 'chazard10.3';
$dbname = 'custom';
$id= $_GET['id'];
$connect = mysqli_connect(HOST, $user, $userpass, $dbname);
if (!$connect) {
    echo "Could not connect to database";
} else {
    $sql = "DELETE FROM students where id=$id";
    $select = mysqli_query($connect, $sql) or die('error occured' . mysqli_error($connect));
    if (!$select) {
        echo'cannot deletet';
    } else {
        echo "deleted";
    }

    echo "<a href='./display.php'>Go back</a>";
    
}
?>