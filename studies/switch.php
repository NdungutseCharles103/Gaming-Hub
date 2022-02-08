<?php
/* function grade($grade)
{
    switch ($grade) {
        case 'A':
            echo "Grade is A";
            echo "<br>";
            echo "First Class";

        case "A":
            echo "Grade is B";
            echo "<br>";
            echo "Second Class";

        case "B":
            echo "Grade is C";
            echo "<br>";
            echo "Third Class";

        case "C":
            echo "Grade is D";
            echo "<br>";
            echo "Fourth Class";

        default:
            echo "Undefined";
    }
}
grade(87);
 */
//switch scores
function getScore($score)
{
    switch ($score) {
        case($score>=75):
            echo "Grade is A";
            echo "<br>";
            echo "First Class";
            break;
        case ($score >= 66 && $score <= 74):
            echo "Grade is B";
            echo "<br>";
            echo "Second Class";
            break;
        case($score>=60 && $score<= 65):
            echo "Grade is C";
            echo "<br>";
            echo "Third Class";
            break;
        case($score >=50 && $score<=59):
            echo "Grade is D";
            echo "<br>";
            echo "Fourth Class";
            break;
        default:
            echo "Unclassified";       
    }
}
getScore(57);
