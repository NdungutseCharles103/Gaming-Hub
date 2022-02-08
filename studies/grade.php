<?php
function grade($sum){
    if($sum>=75):
        echo "Grade is A";
        echo "<br>";
        echo "First Class";
    
    elseif($sum>=66 && $sum<=74):
        echo "Grade is B";
        echo "<br>";
        echo "Second Class";
    
    elseif($sum>=60 && $sum<= 65):
        echo "Grade is C";
        echo "<br>";
        echo "Third Class";
    
    elseif($sum >=50 && $sum<=59):
        echo "Grade is D";
        echo "<br>";
        echo "Fourth Class";
    
    else:
        echo "Undefined";
    endif;
}
grade(87);
    
?>