

<?php

// include 'edit.php';
$userid=$_POST["user_id"];
$firstName=$_POST["firstname"];
$lastName=$_POST["lastname"];
$telephone=$_POST["tel"];
$gender=$_POST["gender"];
$nationality=$_POST["Nationality"];
$username=$_POST["username"];
$email = $_POST["email"];
$password=$_POST["password"];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if (($firstName=="") ||($lastName=="") || ($email=="")){
    echo 'Please provide all information';
}
else{
    define('HOST', "localhost");
    $DB_host="localhost";
    $DB_user="root";
    $DB_password="chazard10.3";
    $DB_name="db_mis";
    $connection= mysqli_connect(HOST,$DB_user,$DB_password,$DB_name);
    if (!$connection) {
       echo 'connection error'.mysqli_connect_error();
    }elseif (($firstName=="") ||($lastName=="") || ($email=="")||($password=="")){
        echo 'Please provide all information';
    }
    elseif($password!="$cpassword"){
        echo 'Passwords do not match!!';
    }
    else{
        $insertQuery="UPDATE mis_users SET firstName='$firstName', lastName='$lastName',
        telephone='$telephone', gender='$gender', nationality='$nationality', username='$username', email='$email',
        password='$password' WHERE user_id=$userid";

        $insert = mysqli_query($connection,$insertQuery) or die("Error occurred".mysqli_error($connection));
        if ($insert) {  
            echo 'insert successfully';
        }else {
            echo 'failed to add a new user';
        }

    }
}
?>