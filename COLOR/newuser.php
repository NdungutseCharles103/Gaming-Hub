<?php
// include 'dbconnect.php';

define('HOST', 'localhost');
$DB_Name = 'color';
$DB_user = 'root';
$DB_password = '';

$connection = mysqli_connect(HOST, $DB_user, $DB_password, $DB_Name);
if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
} else {
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $username = trim($_POST['username']);
        $password = $_POST['password'];

        if ($email == '' || $username == '' || $password == '') {
            echo "Please fill all the fields.";
        } else {
            $hashed = hash('SHA512', $password);

            $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$hashed')";
            $insert = mysqli_query($connection, $sql);
            if ($insert) {
                echo "Successfully registered";
                header("Location: login.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($connection);
            }
        }
    }
}
