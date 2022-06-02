<?php 
    define("HOST", "localhost");
    define('USER', 'root');
    define('PASSWORD', 'chazard10.3');
    define('DATABASE', 'rwanda');
    
    $connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

    if (!$connect) {
        echo "unable to connect to database";
    } else {
        
    $villages = fopen("villages.txt", "w") or die("unable to open file");
    
    $query =mysqli_query($connect, "SELECT * from villages") or die(mysqli_error($connect));

    while ($village = mysqli_fetch_array($query)) {
        $villageId = $village["villageId"] ; 
        $cellId = $village["cellId"]; 
        $villageName = $village["villageName"];
        fwrite($villages, $villageId . "," . $cellId.",".$villageName."\n");
    }
    fclose($villages);
}
