<html>
    <head>
        <title>
        Html Calc sec
        </title>
        <meta charset = "utf-8">
    </head>

    <body> 
        <div>                       
            <?php
            $c = 1;
            while($c<=5)   
                {
                echo "<form method = 'POST' action = '003PW-Ativi_1_Calc.php' input type ='submit'>";
                echo "Valor do $c pescador é R$:<input type = 'text' name = 'var. '$c''
                max = '100' min = '0' value ='0'/><br>"; 
                $c++;
                }
            echo "<p><input type = 'submit' name = 'resultado' size = '20'></p>"
            ?>
        </div>
    </body>
</html>
