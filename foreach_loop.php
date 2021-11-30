<?php
$cars = [

       "Honda ciry",
       "BMW",
       "Toyota"

];           
foreach ($cars as $value) {
	echo $value."<br>";
}

// associated array

$age=[

      "Bill" =>25,
      "Steve" =>20,
      "Elon" =>30

     ];

foreach ($age as $key => $value) {
 echo "$key = $value <br>";
}

?>