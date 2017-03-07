<?php
/**
 * Created by PhpStorm.
 * User: charlie
 * Date: 04/03/2017
 * Time: 11:09
 */

$numarr= [1,2,3,4,5,6,7,8,9,10];
function numberType($arr) {
	$even_total= 0;
	$odd_total= 0;
	if(is_array($arr) && !empty($arr)) {
		foreach($arr as $num) {
			if($num % 2 == 0) {
				$even_total += $num;
			}
			else {
				$odd_total += $num;
			}
		}
	}
	return $odd_total-$even_total;
}

$result= numberType($numarr);
echo $result;