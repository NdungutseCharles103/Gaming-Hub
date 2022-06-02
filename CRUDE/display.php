<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    define('HOST', "localhost");
    $DB_host="localhost";
    $DB_user="root";
    $DB_password="chazard10.3";
    $DB_name="db_mis";
    $connection= mysqli_connect($DB_host,$DB_user,$DB_password,$DB_name);

      if (!$connection) {
       echo 'connection error'.mysqli_connect_error();
    }else{
        $sql="SELECT * FROM mis_users";
        $select = mysqli_query($connection, $sql) or die("Error occurred".mysqli_error($connection));
      

    } 

    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>email</th>
            <th>Nationality</th>
        </tr>
    </table>
    <?php
    while ($row=mysqli_fetch_assoc($select)){
    }
        ?>
    <tr>
        <td><?=$row['user_id']?></td>
        <td><?=$row['firstname']?></td>
        <td><?=$row['lastname']?></td>
        <td><?=$row['gender']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['nationality']?></td>
    </tr>

</body>

</html>