<?php
$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$telephone = $_POST["tel"];
$gender = $_POST["gender"];
$nationality = $_POST["Nationality"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if (($firstName == "") || ($lastName == "") || ($email == "")) {
    echo 'Please provide all information';
} elseif ($password != "$cpassword") {
    echo 'Passwords do not match!!';
} else {

    if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
        include "db_conn.php";

        echo "<pre>";
        print_r($_FILES['my_image']);
        echo "</pre>";

        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tmp_name = $_FILES['my_image']['tmp_name'];
        $error = $_FILES['my_image']['error'];

        if ($error === 0) {
            if ($img_size > 1257000) {
                $em = "Sorry, your file is too large.";
                header("Location: form.php?error=$em");
            } else {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg", "jpeg", "png");
                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                    $img_upload_path = 'uploads/' . $new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
                    $sql = "INSERT INTO mis_users(firstName, lastName, gender, telephone,email,nationality, username,password, image_url) values
        		('$firstName','$lastName','$gender','$telephone','$email','$nationality','$username','$hashed_password','$new_img_name')";

                    mysqli_query($conn, $sql);
                    echo 'inserted';
                    header("Location: display.php");
                } else {
                    $em = "You can't upload files of this type";
                    header("Location: form.php?error=$em");
                }
            }
        } else {
            $em = "unknown error occurred!";
            header("Location: form.php?error=$em");
        }
    } else {
        header("Location: form.php");
    }
}
