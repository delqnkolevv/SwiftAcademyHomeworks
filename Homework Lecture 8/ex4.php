<html>
    <head>
        <title>ex4 #homework 8</title>
    </head>
    <body>
      <?php
	$x = 8;
	$n = 1;
	for($i=1;$i<=$x-1;$i++){
		 $n*=($i+1); 
		}
		
	$c = 3;
	$k = 1;
	for($i=1;$i<=$c-1;$i++){
			$k*=($i+1);
		}

	if ((1 < $c) && ($c < $x) && ($x < 100)){

		$result = $n / $k;
		echo $result;
	}
			

	?>
    </body>
</html>
