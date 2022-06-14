<?php

    use Shuchkin\SimpleXLSX;

    include 'SimpleXLSX.php';
    $data = SimpleXLSX::parse("studentdetails.xlsx");
    $connection = mysqli_connect("127.0.0.1", "root", "chazard10.3", "users") or die("Failed to connect to the database".mysqli_error($connection));
    if(!$data)
    die("Failed to open file");
    $head = $data->rows()[2];
    print_r($head);

    for($i=1; $i < count($data->rows()); $i++){
        $row = $data->rows()[$i];
        print_r($row);
        $query = "INSERT INTO student(schoolcode, studentcode, lastname, firstname) VALUES('$row[0]', '$row[1]', '$row[2]', '$row[3]')";

        $response = mysqli_query($connection, $query) or die("Failed to connect to the enter some rows<br>".mysqli_error($connection));
    }

    echo $query;
?>