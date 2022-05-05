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
     $insertQuery="DELETE FROM mis_users";
     $insert = mysqli_query($connection,$insertQuery) or die("Error occurred".mysqli_error($connection));
     if ($insert) {  
         echo 'All records were successfully deleted';
         echo '<br/>'.'<a href="display.php">Go Back</a>';
     }else {
         echo 'failed to delete users';
     }
 }

?>