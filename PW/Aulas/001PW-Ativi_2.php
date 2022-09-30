<html>
    <head>
        <title>
        PHP calc sec
        </title>
        <meta charset = "utf-8">
    </head>
    <body>

        <?php

        $seg = $_POST["seg"];

        $min = $seg / 60;
        $hr = $seg / 3600;
        

             echo "Em ", $seg, " segundos, há:<br/>", 
             $min, " minutos<br/>", $hr, " horas <br/>";
        ?>

    </body>
</html>
