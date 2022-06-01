<?php
    include 'dbconnect.php';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashed = md5($password);

        $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$hashed')";
        $insert = mysqli_query($conn, $sql);
        if($insert){
            header("Location: login.php");
        }
    }
?>