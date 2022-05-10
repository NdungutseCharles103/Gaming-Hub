<?php
include "connect.php";
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username == '' || $password =='') {
        echo "Invalid credentials";
    }
} else {
    $encrypt = hash("sha35", $password);
    echo "Credentials are valid";

    $query = mysqli_query($connection, "SELECT user_id, username,lastName,firstName,Nationality,gender, email,telephone, image_url FROM mis_users");

}

?>