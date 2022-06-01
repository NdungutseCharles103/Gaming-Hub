<?php

    use Shuchkin\SimpleXLSX;

    include 'SimpleXLSX.php';
    $data = SimpleXLSX::parse("RCA-Students.xlsx");
    $connection = mysqli_connect("127.0.0.1", "root", "", "users") or die("Failed to connect to the database".mysqli_error($connection));
    if(!$data)
    die("Failed to open file");
    $head = $data->rows()[2];
    for($i=3; $i < count($data->rows()); $i++){
        $query = "INSERT INTO mis_users(firstName,lastName,userName,gender,nationality,image_url,password,telephone,email) VALUES";
        $line = "(";
        for($j=0; $j < count($data->rows()[$i]); $j++){
            $line = $line."'".str_replace("'", "\'", $data->rows()[$i][$j])."',";
        }
        $query = $query.substr($line, 0, -1).")";
        $response = mysqli_query($connection, $query) or die("Failed to connect to the enter some rows<br>".mysqli_error($connection));
    }

    echo $query;
?>