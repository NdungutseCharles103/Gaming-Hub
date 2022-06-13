<?php

    $pdo= new PDO('mysql:host=localhost;dbname=rwanda', 'root', 'chazard10.3');
    
    $sql = "SELECT * FROM villages";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $villages = $stmt->fetchAll();

    foreach ($villages as $village) {
        echo $village['villageName'] . '<br>';
    }
    $pdo = null;

?>  