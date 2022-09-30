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
        $altura = $_POST["altura"];

        $area = 2*3.14*$raio*$altura; 
        
             echo "A área externa da lata é ", $area, "m²";

        ?>

    </body>
</html>
