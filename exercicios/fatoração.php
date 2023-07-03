<!DOCTYPE html> 
<html>
    <head>
        <title>Prática - Fatorial</title>
        <meta charset="UTF-8">
        </head>
         <style>
	    
		body{
            background-image: url(614743.png);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            }
        </style>
            
       <body>
        <center><h1>Fatoração</h1>
        <hr>
        <form action="queromorre.php" method="POST">

            Digite um número inteiro: <input type="number" name="va" id="va"><br><br>
            <input type="submit" value="Calcular"></center>

        </form>
    </body>


<?php

  $n = $_POST['va'];
  $a = 1;
  
  while($n > 1){

  echo $a = $a * $n . " , ";
  $n --;

  } 

  echo "<br>Resultado final: " .$a.".";
 
?>


</html>