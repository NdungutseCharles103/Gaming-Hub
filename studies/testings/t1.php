<?php declare(strict_types=1);
function setHeight($minheight = 50) {
 echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight(); // will use the default value of 50 

?>