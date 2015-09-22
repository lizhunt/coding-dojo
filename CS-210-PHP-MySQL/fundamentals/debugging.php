<?php  

echo "<h2> Fix all the errors to show the page </h2>";

$array = array("var_dump", "and", "echo", "helps", "debug");
$length = count($array);

foreach($array as $key => $value) {
	echo "The value at the {$key} index is {$value}<br />";
}

echo "<h3>isset function determines if a variable is set and is not NULL</h3>";
$error = 0;
	
if(isset($error)) {
  echo "Is an empty string NULL? Also, think of an operator that we can use to return a true value to a variable that is not set yet!!!!!";
}

var_dump($array);


?>