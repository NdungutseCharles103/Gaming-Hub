<?php 
    define("HOST", "localhost");
    define('USER', 'root');
    define('PASSWORD', 'chazard10.3');
    define('DATABASE', 'study');
    
    $connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

    if (!$connect) {
        echo "unable to connect to database";
    } else {
        
    $villages = fopen("village.txt", "r") or die("unable to open file");
    

    while (!feof($villages)) {
    $line = fgets($villages);
    $village = explode(',', $line);
    $villageId = trim($village[0]);
    $cellId = trim($village[1]);
    $villageName = trim($village[2]);   
                             
    $query =mysqli_query($connect,"INSERT INTO villages(villageId, cellId, villageName) 
    VALUES ('$villageId', '$cellId', '$villageName')") or die(mysqli_error($connect));

    // if ($query) {
    //     echo "villageId".$villageId." added successfully";
    //     }
    }
    fclose($villages);
}
