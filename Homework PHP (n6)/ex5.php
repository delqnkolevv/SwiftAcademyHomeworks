<html>
    <head>
        <title>ex4 Php</title>
    </head>
    <body>
        <?php
        $A = 5;
        $B = -5;
        $C = 10;
        $D = 0;
        $E = 12;
        $F = 0.2;
        $G = 4;
        $H = 20;
        $I = 9;
        $J = 9;
        $K = 0;
        $L = 80;
        $M = -14.4;
        $N = -0.2;
        $O = 24;
        $P = 43;
        $Q = -43;
        $R = 100;
        $S = 0.22;
        $T = 30;
        $U = 43;

        dd ($A < $B , $A > $B , $C == $M, $A == $B , $C <= $B , $D === $K , $K != $D , $K <> $D , $N == $F , $N === $F , $N <= $F , $N != $F , $O <> $P , $S == $R , $Q <> $D);
        
        
        
        function dd(){
            
            array_map(function($A){     
            echo "<pre>";
            var_dump($A);
            echo "</pre>";
            },  func_get_args());

        }
        
        ?>
    </body>
</html>