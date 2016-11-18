<html>
    <head>
        <title>ex2 homework #7</title>
    </head>
    <body>
        <?php
	$a = 7;

        if($a > 0 && $a<= 3){
            $a *= 10;
            echo $a;
        }else if ($a >= 4 && $a <= 6){
            $a *= 15;
            echo $a;
        }else if ($a >= 7 && $a <= 9){
            $a *= 20;
            echo $a;
        }else if ($a > 10){
            $a *= 100;
        }else if ($a < 0){
            echo "invalid score";
            // 10 не участва в условието
        }else if ($a == 10){
            
        }
        
        
        ?>
    </body>
</html>