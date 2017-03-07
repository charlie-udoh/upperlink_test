<?php

//array of integers
$int_arr= [1,2,3,4,5,6,7,8,9,10];


// function calculates the difference between the total odd numbers 
// and total even numbers in the integer array passed as a parameter
function getIntDifference($arr) {
    $even_total= 0;
    $odd_total = 0;
    //check if parameter is an array
    if(is_array($arr)) {
	//loop through the array
	foreach ($arr as $num) {
	    //divide number by 2
	    if($num % 2 == 0) {
		//if remainder IS 0, number is an even number. Add to the total even number variable
		$even_total+= $num;
	    }
	    else {
		//if remainder is not 0, number is an odd number. Add to the total odd number variable
	        $odd_total+= $num;
	    }	
	}
    }
//return the difference between the total odd numbers and total even numbers
    return $odd_total - $even_total;

}


//call the function

echo getIntDifference($int_arr);

?>
