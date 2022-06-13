<?php

define('HOST', "localhost");
$DB_host="localhost";
$DB_user="root";
$DB_password="chazard10.3";
$DB_name="db_mis";
$connection= mysqli_connect(HOST,$DB_user,$DB_password,$DB_name);
if (!$connection) {
   echo 'connection error'.mysqli_connect_error();
}else{
    $id=$_GET['thisID'];
    $delquery ="DELETE from mis_users where user_id =$id";
    $delete = mysqli_query($connection,$delquery) or die("Error occurred" . mysqli_error($connection));
    if ($delete) {
       echo 'deleted successfully';
       echo '<br/>'.'<a href="display.php">Go Back</a>';
    }else {
        echo 'deleted failed';
    }
}
?>