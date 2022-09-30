<html>
    <head>
        <title>
        PHP calc sec
        </title>
        <meta charset = "utf-8">
    </head>
    <body>

        <?php

        $raio = $_POST["raio"];

        $volume = (4/3)*3.14*$raio**3;
        

             echo "O volume da esfera é ", $volume "m³"; 
        ?>

    </body>
</html>
