<?php
$marks = [32, 23, 23,45,23];
$scores = array(
    array(10, 11, 12, 13, 14, 15),
    array(20, 21, 22, 23, 24, 25),
    array(30, 31, 32, 33, 34, 35)
);
    echo"<h1> Using foreach</h1>";
    foreach ($marks as $mark) {
        echo "The mark is ".$mark."<br/>";
        
    }
    echo "<h1> Printing an array</h1>";
    foreach ($marks as $index=>$marks) {

        echo "The mark is at index ".$index." is ".$marks."<br/>";
    }

    echo "<h1> Printing a Multidimensional array using foreach</h1>";
    foreach ($scores as $score) {
        foreach ($score as $sc) {
            echo "The score is " . $sc."<br/>";
            
        }
        
    }
    echo"<h1>WIth key</h1>";
    foreach ($scores as $key=>$score) {
        foreach ($score as $k=>$sc) {
            echo"The score at $key and $k is $sc <br>";           
        }
        
    };

    //Associative array
    echo "<h1>Associative array</h1>";
    $population = array(
        "weastern"=>array("Nyabihu"=>500, "Karongi"=>300, "Rubavu"=>400, "Ngororero"=>623),
        "Northern"=>array("Musanze"=>700, "Gicumbi"=>500, "Gakenke"=>180, "Rulindo"=>390),
        "Kigali"=>array("Gasabo"=>1000, "Nyarugenge"=>470, "Kicukiro"=>233),
        "Easteren"=>array("Rwamagana"=>388, "Bugesera"=>470, "Nyagatare"=>590, "Kirehe"=>320)
    );
    foreach($population as $key=>$province) {
        foreach ($province as $dist=>$pop) {
            echo "Population in $dist of $key is $pop"."<br>";
        }
    }

?>