<?php
$colors = array("Red","Yellow","Blue");

$object = (object) $colors;

var_dump($colors)."<br>";
echo"<pre>";
print_r($colors);
echo"<pre>";
echo"<br>";


$arr = array("Red",20,"Yellow",12.50);

for ($i=0; $i < 4; $i++) { 
	echo $arr[$i]."<br>";
}



?>