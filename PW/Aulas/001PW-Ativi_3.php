<html>
    <head>
        <title>
        PHP calc sec
        </title>
        <meta charset = "utf-8">
    </head>
    <body>

        <?php

        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        $delta = ($b**2)-4*$a*$c;
        $x1 = (-$b+ sqrt($delta))/(2*a);
        $x2 = (-$b- sqrt($delta))/(2*a);
        

             echo "O x1 e x2 da equação de segundo grau são respectivamente </br>", $x1, "</br>", $x2; 
        ?>

    </body>
</html>
