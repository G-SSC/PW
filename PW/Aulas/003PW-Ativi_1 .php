<html>
    <head>
        <title>
        Html Calc sec
        </title>
        <meta charset = "utf-8">
    </head>
/* não consegui fazer as outras atividades professor, na verdade nem essa completamente */
    <body> 
        <div>       
                
            <?php
            $c = 1;
            while($c<=10)   
                {
                echo "<form method = 'POST' action = '003PW-Ativi_1_Calc.php' input type ='submit'>";
                echo "Valor $c:<input type = 'text' name = 'var. '$c''
                max = '100' min = '0' value ='0'/><br>"; 
                $c++;
                }


                echo "<p><input type = 'submit' name = 'resultado' size = '20'></p>"
                ?>
    
            </form>
        </div>
    </body>
</html>
