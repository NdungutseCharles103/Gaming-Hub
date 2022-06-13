<?php
$username = $_GET["username"];
$password = $_GET["password"];

    define('HOST', "localhost");
    $DB_host="localhost";
    $DB_user="root";
    $DB_password="";
    $DB_name="users";
    $connection= mysqli_connect($DB_host,$DB_user,$DB_password,$DB_name);

    if (!$connection) {
        echo "connection failed";
    }else{
        $encrypt = md5($password);
        $select = mysqli_query($connection, "SELECT username from mis_users where username='$username'
         && password='$encrypt'")  or die(mysqli_error($connection));
         if(!$select){
             echo"unable to login";
         }else{
             if (mysqli_num_rows($select)>0) {
                $name = mysqli_fetch_array($select);
                // var_dump($name);
                $user = $name["username"];
                echo " Hello $user";
             } else {
                 echo "No user found";
             }
             
           
         }
    }

?>