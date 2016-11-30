<?php 

// Напишете програма, която пресмята n!.
// Използвайте функция за пресмятането на резултата;
function factorial($number){
	$fact = 1;
	for($i = 1;$number >= $i;$i++){
		$fact *= $i;
	}
	echo $fact;
}
factorial(5);
?>