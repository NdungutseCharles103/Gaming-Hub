<?php 
$provinces = fopen("province.txt", "r") or die("Unable to open the file");
// echo fread($provinces, filesize("province.txt"));
while (!feof($provinces)) {
    echo fgets($provinces);
    // echo "\n";
}
fclose($provinces)
?>