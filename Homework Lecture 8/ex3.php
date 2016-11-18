<html>
    <head>
        <title>ex3 #homework 8</title>
    </head>
    <body>
      <?php
  //    S = 1 + 1!/x + 2!/x2 + … + n!/x^n
	
      $sum = 1;
      $n = 5;
      $x = -4;
      for ($i=1;$i <= $n;$i++){
      	$fact = 1;
      	$stepen = 1;
      	for($d=1;$d <= $i;$d++){
      		$fact *= $d;
      		$stepen *= $x;
      	}
      	
      $sum += $fact / $stepen;
      		
      }
      echo $sum;

	?>
    </body>
</html>
