<?php

$firstName=$_POST["firstname"];
$lastName=$_POST["lastname"];
$telephone=$_POST["tel"];
$gender=$_POST["gender"];
$nationality=$_POST["Nationality"];
$username=$_POST["username"];
$email = $_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];

if (($firstName=="") ||($lastName=="") || ($email=="")){
    echo 'Please provide all information';
}
else{
    define('HOST', "localhost");
    $DB_host="localhost";
    $DB_user="root";
    $DB_password="chazard10.3";
    $DB_name="db_mis";
    $connection= mysqli_connect($DB_host,$DB_user,$DB_password,$DB_name);
    if (!$connection) {
       echo 'connection error'.mysqli_connect_error();
    }else{
        // $encrypt = hash('SHA',);
      /*   $insertQuery="INSERT INTO mis_users(firstName, lastName, gender, telephone,email,nationality, username,password,cpassword) values
        ('$firstName','$lastName','$gender','$telephone','$email','$nationality','$username','$password','$cpassword')";

        $insert = mysqli_query($connection,$insertQuery) or die("Error occurred".mysqli_error($connection)); */
        $sql="SELECT * FROM mis_users";
        $select = mysqli_query($connection, $sql) or die("Error occurred".mysqli_error($connection));
        echo "";
        while ($row = mysqli_fetch_assoc($select)){
            echo "tr";
            echo "<td>".$row['user_id']."</td>";
            echo "<td>".$row['firstname']."</td>";
            echo "<td>".$row['lastname']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>".$row['telephone']."</td>";
        }

       /*  if ($insert) {
            echo 'insert successfully';
        }else {
            echo 'failed to add a new user';
        } */

    }

}
?>