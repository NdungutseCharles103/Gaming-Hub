<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../Q4/style.css">
    <style>
        body {
            background-color: aliceblue;
        }

        .d,
        th,
        td,
        tr {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            background: dodgerblue;
        }

        td {
            background: rgb(231, 226, 226);
            ;
            width: 300px;
            text-align: center;
        }

        .linkup {
            width: 100%;
            text-decoration: none;
            color: #00f;
        }

        .linkup:hover {
            text-decoration: underline;
        }

        a {
            text-decoration: none;
            display: block;
            color: #00f;
            margin-top: 10px;
        }

        input {
            outline: none;
            padding: 5px;
            margin: 0 10px;
            font-size: 1.1em;
        }

        input[type="submit"] {
            margin: 0 10px !important;
        }
    </style>
</head>

<body>
    <?php

    define('HOST', "localhost");
    $user = 'root';
    $userpass = 'chazard10.3';
    $dbname = 'custom';

    $connect = mysqli_connect(HOST, $user, $userpass, $dbname);
    if (!$connect) {
        echo "Could not connect to database";
    } else {
        $sql = "SELECT id, username, email FROM students";
        $select = mysqli_query($connect, $sql) or die('error occured' . mysqli_error($connect));

        if (mysqli_num_rows($select) > 0) {
            echo "<table class='d'>
            <tr>
                 <th>StudentID</th>
                 <th>StudentName</th>
                 <th>email</th>
                 <th>actions</th>
                 </tr>";
            foreach ($select as $row) {
                echo "<tr>" . "<td>" . $row['id'] . "</td>
                <td>" . $row['username'] . "</td>" .
                    "<td>" . $row['email'] . "</td>"
                    . "<td><div class='actions'>
                    <a href='./update.php?id=" .$row['id']. "'><i class='bx bx-edit-alt'></i></a>
                    <a href='./delete.php?id=" .$row['id']. "'><i class='bx bx-trash'>
                    </i></a></div></td></tr>";
            }
            echo "</table>";
        }else {
            echo "0 result";
        }
    }
    ?>

</body>

</html>