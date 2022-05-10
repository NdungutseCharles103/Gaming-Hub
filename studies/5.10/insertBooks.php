<?php 
    define("HOST", "localhost");
    define('USER', 'root');
    define('PASSWORD', 'chazard10.3');
    define('DATABASE', 'study');
    
    $connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

    if (!$connect) {
        echo "unable to connect to database";
    } else {
        
    $books = fopen("books.xlsx", "r") or die("unable to open file");
    

    while (!feof($books)) {
    $line = fgets($books);
    $book = explode(',', $line);
    $code = trim($book[0]);
    $bookName = trim($book[1]);
    $Subject = trim($book[2]);   
    $lang = trim($book[3]);   

    $query =mysqli_query($connect,"INSERT INTO books(code, BookName, Subject) 
    VALUES ('$code', '$bookName', '$lang')") or die(mysqli_error($connect));

    }
    fclose($books);
}
