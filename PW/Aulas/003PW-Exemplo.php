<html>
    <head>
        <title>
        Calculo de conversão de medidas
        </title>
        <meta charset = "utf-8">
    </head>
    <body>

        <?php		
        $rep = 0;		
        while($rep<=9)			
            {				
            $num1 = $_POST["num"];
			
			$metro = $num1 / 100;
			$decimetro = $num1 / 10;
            $mlmetro = $num1 * 10;            
           
            echo $num1 ." cm equivale a ", $metro ." metros, " . 
			     $decimetro, " decimetros,  e " . $mlmetro  . " milimetros.<br><br>";
        
		    $rep++;           
		   }					
		?>
		
    </body>
</html>
