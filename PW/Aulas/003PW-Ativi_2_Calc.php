<html>
    <head>
        <title>
        PHP calc sec
        </title>
        <meta charset = "utf-8">
    </head>
    <body>

        <?php

        $rep=1;
        while($rep<=5)
            {
            $num1 = $_POST["var."];
            
            if($num<50)
                {
                
                }
            $metro = $num1 / 100;
            $decimetro = $num1 / 10;
            $mlmetro = $num1 * 10;
            echo "Valor $rep: $num1 que é ", $num1, "cm equivale a :", $metro,
            " metros, ", $decimetro, " decimetros, ", $mlmetro, " milimetros<br>";
            $rep++;
            }
        ?>

    </body>
</html>
