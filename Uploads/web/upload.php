<?php

if (isset($_POST['submit']) && isset($_FILES['picture'])) {

    $sname = "localhost";
    $uname = "ndungutsecharles103@gmail.com";
    $password = "chazard10.3";

    $db_name = "users";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if (!$conn) {
        echo "Connection failed!";
        exit();
    }
    
    echo "<pre>";
    print_r($_FILES['picture']);
    echo "</pre>";

    $img_name = $_FILES['picture']['name'];
    $img_size = $_FILES['picture']['size'];
    $tmp_name = $_FILES['picture']['tmp_name'];
    $error = $_FILES['picture']['error'];

    if ($error === 0) {
        if ($img_size > 125000) {
            $em = "Sorry, your file is too large.";
            header("Location: index.php?error=$em");
        } else {
            $img_ex = pathinfo ($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $sql = "INSERT INTO images(image_url) 
				        VALUES('$new_img_name')";
                mysqli_query($conn, $sql);
                header("Location: view.php");
            } else {
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        }
    } else {
        $em = "unknown error occurred!";
        header("Location: index.php?error=$em");
    }
} else {
    header("Location: index.php");
}
