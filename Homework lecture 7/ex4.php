<!DOCTYPE html>
<html>
<title>ex4 #homework 7</title>
<body>

<?php
	
	$a = 5;
	$b = 6;
	$c = 4;

	if (($a && $b < 0) && ($c > 0)){
		echo "+";
	}else if(($a && $c < 0) && ($b > 0)){
		echo "-";
	}else if(($b && $c < 0) && ($a > 0)){
		echo "+";
	}else if(($a && $b > 0) && ($c > 0)){
		echo "+";
	}else{
		echo "-";
}

?>

  
</body>
</html>