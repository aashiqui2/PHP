<?php

$fptr = fopen("28_file.txt", "r");
// echo var_dump($fptr);
if(!$fptr){
    die("Unable to open this file.Please enter a valid filename");
}
// $content = fread($fptr, filesize("28_file.txt"));
$content = fread($fptr, 5);
fclose($fptr);
echo $content;

?>
