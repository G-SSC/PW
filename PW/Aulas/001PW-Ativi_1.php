    <html>
    <head>
        <title>
        PHP calc
        </title>
        <meta charset = "utf-8">
    </head>
    <body>

        <?php

        $num1 = $_POST["num1"];

        $metro = $num1 / 100;
        $decimetro = $num1 / 10;
        $mlmetro = $num1 * 10;

            echo "Em ", $num1, " cm, há:", $metro, " metros, ", $decimetro, " decimetros, ", $mlmetro, " milimetros</br>";
        ?>

    </body>
</html>
