<html>
    <head>
        <title>
        PHP calc sec
        </title>
        <meta charset = "utf-8">
    </head>
    <body>

        <?php

        $venda = $_POST["fabrica"];

        $revenda = $venda+($venda*0.44);
        
             echo "O valor de revenda é R$", $revenda;

        ?>

    </body>
</html>
