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
        a {
            text-decoration: none;
            display: block;
            color: #00f;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php include'./headeruser.php'; ?>
    <?php

    $id = $_GET['search'];
    $name = $_GET['searchname'];
        if($id=='' && $name==''){
            echo "Please provide a search name or id";
            echo "<a href='display.php'>Go back</a>";

        }else{
    define('HOST', "localhost");
    $DB_host = "localhost";
    $DB_user = "root";
    $DB_password = "chazard10.3";
    $DB_name = "db_mis";
    $connection = mysqli_connect($DB_host, $DB_user, $DB_password, $DB_name);
    if (!$connection) {
        echo 'connection error' . mysqli_connect_error();
    } elseif($id !="") {
        $sql = "SELECT user_id, username,lastName,firstName,Nationality,gender, email,telephone FROM mis_users where user_id =$id";
        $select = mysqli_query($connection, $sql) or die("Error occurred" . mysqli_error($connection));
        // $result = $connection->query($sql);
        if (mysqli_num_rows($select) > 0) {
            echo '<h1>The result are:</h1>';
            echo "<table class='d'>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
            <th>Nationality</th>
            <th>Gender</th>
            <th>telephone</th>
            <th>update</th>
            <th>Delete</th>
            </tr>";
            // output data of each row
            while ($row = mysqli_fetch_array($select)) {
                // $edit = '<a href="edit.php">edit user</a>';
                echo "<tr>
                  <td>" . $row["user_id"] . "</td>
                   <td>" . $row["firstName"] . " " . $row["lastName"] . "</td>
                   <td>" . $row["email"] . "</td>
                   <td>" . $row["Nationality"] . "</td>
                   <td>" . $row["gender"] . "</td>
                   <td>" . $row["telephone"] . "</td>
                   <td><a class='linkup' href='edit.php?thisID=" . $row['user_id'] . "'>Update</a></td>
                   <td><a class='linkup' href='delete.php?thisID=" . $row['user_id'] . "'>Delete</a></td>
                   </tr>";
            }
            echo "</table>";
            $msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("ndungutsecharles103@gmail.com","My subject",$msg);
        } else {
            echo "No user has an id of " . $id . "";
            echo "<a href='display.php'>Go back</a>";
        }
        $connection->close();
    }elseif($name != '') {
        $sql = "SELECT user_id, username,lastName,firstName,Nationality,gender, email,telephone FROM mis_users where username like '%$name%'";
        $select = mysqli_query($connection, $sql) or die("Error occurred" . mysqli_error($connection));
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            echo '<h1>The result are:</h1>';
            echo "<table class='d'>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
            <th>Nationality</th>
            <th>Gender</th>
            <th>telephone</th>
            <th>update</th>
            <th>Delete</th>
            </tr>";
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                // $edit = '<a href="edit.php">edit user</a>';
                echo "<tr>
                  <td>" . $row["user_id"] . "</td>
                   <td>" . $row["firstName"] . " " . $row["lastName"] . "</td>
                   <td>" . $row["email"] . "</td>
                   <td>" . $row["Nationality"] . "</td>
                   <td>" . $row["gender"] . "</td>
                   <td>" . $row["telephone"] . "</td>
                   <td><a class='linkup' href='edit.php?thisID=" . $row['user_id'] . "'>Update</a></td>
                   <td><a class='linkup' href='delete.php?thisID=" . $row['user_id'] . "'>Delete</a></td>
                   </tr>";
            }
            echo "</table>";
            echo "<a href='display.php'>Display all users</a>";
        } else {
            echo "No user has a name of " . $name . "";
            echo "<a href='display.php'>Go back</a>";
        }
        $connection->close();
    }
}
    ?>
</body>

</html>