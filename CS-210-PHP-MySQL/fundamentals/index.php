<?php

$myData = 7;

function general_function($number) {
	// echo $local_parameter_name . " "; // Param that's passed in
	return $number * 5 . " "; //What comes back from the function — you can set a new variable to this
}

general_function($myData); //prints 7, but won't echo anything
$myReturn = general_function($myData); // prints 7 again
echo $myReturn; // prints 35
$myReturn = general_function($myReturn);
echo $myReturn; //print 245

?>