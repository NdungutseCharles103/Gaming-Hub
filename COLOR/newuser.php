<?php
// include 'dbconnect.php';

define('HOST', 'localhost');
$DB_Name = 'color';
$DB_user = 'root';
$DB_password = '';

echo "submitting";

if (isset($_POST['submit']) && isset($_FILES['file'])) {
    echo "submitting";
    $connection = mysqli_connect(HOST, $DB_user, $DB_password, $DB_Name);
    if (!$connection) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
    } else {
        $email = $_POST['email'];
        $username = trim($_POST['username']);
        $password = $_POST['password'];
        echo "The form was submitted";
        print_r($_FILES['file']);

        $temporary_filename = $_FILES['file']['tmp_name'];
        $final_filename =  $_FILES['file']['name'];
        $img_ex = pathinfo($final_filename, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        $img_upload_path = 'uploads/' . $new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);
        // move_uploaded_file($temporary_filename, "uploads/" . $final_filename);

        // if ($email == '' || $username == '' || $password == '') {
        //     echo "Please fill all the fields.";
        // } else {
        //     $hashed = hash('SHA512', $password);

        //     $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$hashed')";
        //     $insert = mysqli_query($connection, $sql);
        //     if ($insert) {
        //         echo "Successfully registered";
        //         header("Location: login.php");
        //     } else {
        //         echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        //     }
        // }
    }
}
