<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .d,
    th,
    td,
    tr {
      border: 1px solid black;
      border-collapse: collapse;
    }

    td {
      width: 300px;
      text-align: center;
    }
  </style>
</head>

<body>
  <?php

  define('HOST', "localhost");
  $DB_host = "localhost";
  $DB_user = "root";
  $DB_password = "chazard10.3";
  $DB_name = "db_mis";
  $connection = mysqli_connect($DB_host, $DB_user, $DB_password, $DB_name);

  if (!$connection) {
    echo 'connection error' . mysqli_connect_error();
  } else {
    $sql = "SELECT user_id, username,lastName,firstName,Nationality,gender, email,telephone FROM mis_users";
    $select = mysqli_query($connection, $sql) or die("Error occurred" . mysqli_error($connection));
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
      echo "<table class='d'>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>email</th>
      <th>Nationality</th>
      <th>Gender</th>
      <th>telephone</th>
      <th>update</th>
      </tr>";
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        // $edit = '<a href="edit.php">edit user</a>';
        echo "<tr>
            <td>" . $row["user_id"] . "</td>
             <td>" . $row["firstName"] . " " . $row["lastName"] . "</td>
             <td>" . $row["email"] . "</td>
             <td>" . $row["Nationality"] . "</td>
             <td>" . $row["gender"] ."</td>
             <td>" . $row["telephone"] . "</td>
             <td><a href='edit.php?thisID=".$row['user_id']."'>Update</a></td>
             <td><a href='edit.php?thisID=".$row['user_id']."'>Delete</a></td>
             </tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    $connection->close();
  }
  ?>

</body>

</html>