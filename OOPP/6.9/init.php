<?php

include "circle.php";
include "square.php";
// include "shape.php";
include "triangle.php";

$sq1 = new Square(5, 5);
$sq1->color="red";
// $sq1->getColor();
echo $sq1->getColor();

// echo $sq1->color;

?>