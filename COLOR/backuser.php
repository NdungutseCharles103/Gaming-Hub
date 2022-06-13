<?php
    include 'dbconnect.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashed = hash('SHA512', $password);

        $sql = "SELECT username, email FROM users WHERE username = '$username' AND password = '$hashed'";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: login.php");
        }
    }
 ?>