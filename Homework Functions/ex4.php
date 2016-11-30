<?php 
// Напишете функция,
// която приема за параметър цяло число
// и връща числото обърнато на обратно (пр. 123 => 321);


function reverse($number){
	if($number <= 9 && $number > 999){
		echo "Invalid data";
	}if ($number <= 99){
		$rev1 = $number % 10;
		$number /= 10;
		settype($number,"integer");
		echo $rev1 . $number;
	}elseif ($number <= 999){
		$rev1 = $number % 10; // 5
		$rev2 = $number % 100; // 45
		$rev2 = ($rev2 - $rev1) / 10; // 4
		$rev3 = $number / 100; // 9.45
		settype($rev3,"integer"); // 9
		echo $rev1 . $rev2 . $rev3;
	}
}
reverse(945);
?>