<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
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
img{
  width: 50px;
  margin-top: 3px;
}
  </style>
</head>

<body>
  <?php include'./headeruser.php'; ?>
  <?php

  // $q = intval($_GET['q']);
  // echo $q;

  define('HOST', "localhost");
  $DB_host = "localhost";
  $DB_user = "root";
  $DB_password = "chazard10.3";
  $DB_name = "db_mis";
  $connection = mysqli_connect($DB_host, $DB_user, $DB_password, $DB_name);

  if (!$connection) {
    echo 'connection error' . mysqli_connect_error();
  } else {
    $sql = "SELECT user_id, username,lastName,firstName,Nationality,gender, email,telephone, image_url FROM mis_users";
    $select = mysqli_query($connection, $sql) or die("Error occurred" . mysqli_error($connection));
    $result = $connection->query($sql);
	
	// var_dump($result) ;
    if ($result->num_rows > 0) {
      echo '<h1>The registered users so far:</h1>';
      echo "<table class='d'>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Username</th>
      <th>email</th>
      <th>Nationality</th>
      <th>Gender</th>
      <th>telephone</th>
      <th>update</th>
      <th>Delete</th>
      <th>Image</th>
      </tr>";
      // output data of each row
      foreach($result as $row) {
        // $edit = '<a href="edit.php">edit user</a>';
        $imgesrc = $row["image_url"];
        
        echo "<tr>".
            "<td>" . $row["user_id"] . "</td>
             <td>" . $row["firstName"] . " " . $row["lastName"] . "</td>
             <td>" . $row["username"] . "</td>
             <td>" . $row["email"] . "</td>
             <td>" . $row["Nationality"] . "</td>
             <td>" . $row["gender"] ."</td>
             <td>" . $row["telephone"] . "</td>
             <td><a class='linkup' href='edit.php?thisID=".$row['user_id']."'>Update</a></td>
             <td><a class='linkup' href='delete.php?thisID=".$row['user_id']."'>Delete</a></td>
             <td><img src='./uploads/".$imgesrc."'alt='' /></td>
             </tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    //$connection->close();
  }
  ?>
  <a href="form.php">Add user</a>
  <a href="delall.php">Delete all users</a>
</body>

</html>