<html>
    <head>
        <title>
        PHP calc sec
        </title>
        <meta charset = "utf-8">
    </head>
    <body>

        <?php

        $kg = $_POST["carvao"];

        $resu1 = ($kg*100)/98;
        $extra = ($resu1*100)/97;
        
             echo "Precisam ser extraidos ", $extra, "kg de carvão";

        ?>

    </body>
</html>
