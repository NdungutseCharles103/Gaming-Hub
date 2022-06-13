<?php
    /* Connection to the database 
To find the database name, username, and password remember MySQL credentials*/
   $DB_server = "localhost";
   $DB_name = "put here your database name";
   $DB_user_name = "put here your username";
   $DB_user_password = "put here your password";
$connect = mysqli_connect($DB_server,$DB_user_name,$DB_user_password,$DB_name);
   if(!$connect){
       echo mysqli_connect_error();
   }

   /*Before inserting to Database you may check validity of data received if they are empty,etc. For example if password and cpassword are equal
if($password===$cpassword)
 start database interaction
Else
 Go back to the form*/

/* if($addQuery=mysqli_query(
    $connect,"INSERT INTO mis_users(firstName, lastName,gender,telephone, nationality,email, username,password) VALUES 
    ('$firstName','$lastName', '$gender','$telephone','$nationality','$email', '$username','$password')")
    ){
       echo "<h3>Registered successfully</h3>";
    }
    else{
       echo "Error Occurred: ".mysqli_error();
    }
     */
    
?>