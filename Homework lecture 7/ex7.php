<!DOCTYPE html>
<html>
<title>ex7 #homework 7</title>
<body>

<?php
$a = -2;
$b = 4;
$c = 3;

	if (($a >= $b) && ($b >= $c)){
		echo $a . " " . $b . " " . $c;
	}else if (($a >= $c) && ($c >= $b)){
		echo $a . " " . $c . " " . $b;
	}else if (($b >= $a) && ($a >= $c)){
		echo $b . " " . $a . " " . $c;
	}else if (($b >= $c) && ($c >= $a)){
		echo $b . " " . $c . " " . $a;
	}else if (($c >= $a) && ($a >= $b)){
		echo $c . " " . $a . " " . $b;
	}else if (($c >= $b) && ($b >= $a)){
		echo $c . " " . $b . " " . $a;
	}


?>

  
</body>
</html>