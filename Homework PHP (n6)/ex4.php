<html>
    <head>
        <title>ex4 Php</title>
    </head>
    <body>
        <?php
        $A =-7;
        $B =-8;
        $C =14;
        $D =$B * $B - 4 * $A * $C;
        if ($A == 0){
            echo "На 0 не се дели";
        }
        elseif ($D > 0) {
            $result1 = (-$B + sqrt($D)) / 2 * $A;
            $result2 = (-$B - sqrt($D)) / 2 * $A;
            echo  "x1=" . round($result1 , 2);
            // Не сработва константата PHP_EOL (/n)
            echo "<br />";
            echo  "x2=" . round($result2 , 2);
  
        } elseif ($D == 0){
            $result1 = (-$B + sqrt($D)) / 2 * $A;
            echo "Уравнението има само един корен: ";
            echo "x1=" . round($result1 , 2);
        }
        
        elseif ($D < 0){
            echo "Няма реален корен";
        }
        ?>
    </body>
</html>