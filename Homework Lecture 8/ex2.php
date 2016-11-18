<html>
    <head>
        <title>ex1 #homework 8</title>
    </head>
    <body>
        <?php
$start = 1;
$end = 1000;
while ($start < $end){
	if($start % 3 && ($start % 7) != 0){
		echo $start . " ";
	}
$start++;
}
        ?>
    </body>
</html>
