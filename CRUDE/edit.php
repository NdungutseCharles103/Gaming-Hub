<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
    <link rel="stylesheet" href="style.css">
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
    }else{
        $id=$_GET['thisID'];
        $sql = "SELECT user_id, username,lastName,firstName,Nationality,gender, email,telephone FROM mis_users where user_id=$id";
    $select = mysqli_query($connection, $sql) or die("Error occurred" . mysqli_error($connection));
    
    if($select){
        while($row=mysqli_fetch_array($query)){
        }
    }
}
?> 
    <div class="main">
        <form action="signup.php" method="POST">
            <h2>Create account</h2>
            <div class="inputs">
                <div class="inlab">
                    <label for="firstname">Firstname</label>
                    <input type="text" placeholder="Enter First Name" name="firstname">
                </div>
                <div class="inlab">
                    <label for="lastname">Lastname</label>
                    <input type="hidden" name="user_id" value=<?php echo $row['user_id']; ?>>
                </div>
                <div class="inlab">
                    <label for="Email">Email</label>
                    <input type="email" name="email" value=<?php echo $row['email']; ?>>
                </div>
                <div class="inlab">
                    <label for="tel">Telephone</label>
                    <input type="tel" name="tel" pattern="[0-9]{10,12}" value=<?php echo $row['telephone']; ?>>
                </div>
                <div class="inlab">
                    <label for="sex">Gender</label>
                    <?php if($row["gender"]=="Male"){?>
                    <div class="rad">
                        <input type="radio" id="sex" name="gender" value="Male"><label for="Male" checked>Male</label>
                        <input type="radio" id="sex1" name="gender" value="Female"><label for="Female">Female</label>
                    </div>
                    <?php } else{?>
                        <div class="rad">
                        <input type="radio" id="sex" name="gender" value="Male"><label for="Male">Male</label>
                        <input type="radio" id="sex1" name="gender" value="Female"><label for="Female" checked>Female</label>
                    </div>
                    <?php }?>
                </div>
                <div class="inlab">
                    <label for="nationality"> Nationality</label>
                   <Select name="Nationality" id="nationality">
                       <option value=""> --Select--</option>
                       <option value="Rwanda"> <?php echo $row["Nationality"];?></option>
                       <option value="Uganda">Uganda</option>
                       <option value="Kenya"> Kenya</option>
                   </Select>
                </div>
                <div class="inlab">
                    <label for="username">Username</label>
                    <input type="text" name="username" value=<?php echo $row["username"];?>>
                </div>
                <div class="inlab">
                    <label for="password" value="<?=[]?>">Password</label>
                    <input type="password" placeholder="Enter your Password" name="password">
                </div>
                <div class="inlab">
                    <label for="c-password">Confirm Passw</label>
                    <input type="password" placeholder="Comfirn your Password" name="cpassword">
                </div>
                <div>
                    <input type="submit" value="Register"></input>
                </div>
            </div>
            <a href="./display.php">show an example of registered user</a>
        </form>
    </div>
</body>

</html>