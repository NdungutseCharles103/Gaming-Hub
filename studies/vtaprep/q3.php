<?php
function addElement($scores, $index)
{
    $scores = [99, 78, 75, 68, 88, 63, 75, 90, 78];
    $districts = array(["Kicukiro", "Gasabo", "Kamonyi", "Muhanga", "Nyabihu"]);

    array_push($districts, $index);
    array_push($scores, $scores);
    
    print_r($scores) ;
    print_r($districts) ;
    
}
addElement(78, "Kicukiro");
?>
