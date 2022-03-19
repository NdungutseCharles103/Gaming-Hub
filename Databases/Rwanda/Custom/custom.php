<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Districts</title>
  <link rel="stylesheet" href="../../../CRUDE/style.css">
  <style>
    body{
    background-color: aliceblue;
    }
    .d,
    th,
    td,
    tr {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th{
            background: dodgerblue;
        }

    td {
      background: rgb(231, 226, 226);;
      width: 300px;
      text-align: center;
    }
    .linkup{
      width: 100%;
    text-decoration: none;
    color: #00f;
}
.linkup:hover{
  text-decoration: underline;
}
a{
  text-decoration: none;
  display: block;
  color: #00f;
  margin-top: 10px;
}
input{
  outline: none;
  padding: 5px;
  margin: 0 10px;
  font-size: 1.1em;
}
.seacr{
  display: flex;
  width: 100%;
  flex-direction: column;
  align-items: center;
}
.seacr form{
    display: flex;
    flex-direction: row;
    align-items: center;
}
input[type="submit"]{
  margin: 0 10px!important;
}
form, input{
  width: 100%;
}
  </style>
</head>

<body>
  <?php include'./headeruser.php'; ?>
  <?php
  ini_set('display_errors', 0);
  ini_set('display_startup_errors', 0);

  define('HOST', "localhost");
  $DB_host = "localhost";
  $DB_user = "root";
  $DB_password = "chazard10.3";
  $DB_name = "rwanda";
  $connection = mysqli_connect($DB_host, $DB_user, $DB_password, $DB_name);
  $query = $_GET['query'];

  if (!$connection) {
    echo 'connection error' . mysqli_connect_error();
  } else {
    $sql = "$query";
    $select = mysqli_query($connection, $sql) or die("Error occurred" . mysqli_error($connection));
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
      echo '<h1>Results of your query:</h1>';
      echo "<table class='d'>
      <tr>
      <th>Column1</th>
      <th>Column2</th>
      <th>Column3</th>
      <th>Column4</th>
      <th>Column5</th>
      </tr>";
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        // $edit = '<a href="edit.php">edit user</a>';
        echo "<tr>
            <td>" . $row["one"] . "</td>
            <td>" . $row["two"] . "</td>
            <td>" . $row["three"] . "</td>
            <td>" . $row["four"] . "</td>
            <td>" . $row["five"] . "</td>
             </tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    $connection->close();
  }
  ?>
    <a href="../welcome.html">Go to Home Page</a>

</body>

</html>