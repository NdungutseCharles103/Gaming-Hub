<?php

$uname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
if ($uname =='' || $email =='' || $password =='') {
    echo 'provide all information';
} else {

define('HOST', "localhost");
$user = 'carimount';
$userpass = 'chazard10.3';
$dbname = 'custom';


$connect = mysqli_connect(HOST, $user, $userpass,$dbname);
if (!$connect) {
    echo "Could not connect to";
}else {
    $pas = md5($password);
    $query = "INSERT INTO students (username, email, password) VALUES('$uname','$email', '$pas')";
    $insert= mysqli_query($connect, $query) or die("Error occurred" . mysqli_error($connect));

    if ($insert) {
        echo "Successfully inserted into students";
    }else {
        echo "Could not insert into students";
    }

}
echo "<a href='./display.php'>Display students</a>";
}
?>
