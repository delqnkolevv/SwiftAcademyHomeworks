<?php 
// Напишете функция, която приема за параметър две числа и разпечатва по-голямото от тях;


function bigger($number1, $number2){
	if($number1 > $number2){
		echo $number1;
	}else {
		echo $number2;
	}
}
bigger(-20,-20);
?>