<!DOCTYPE html>
<html>
<head>
	<title>Exercício 2</title>
</head>

<style>
        body{
            background-image: url(345392.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            }
        </style>
        
<body>
 
<form action="#" method="POST">
  Digite 1 para: Celsius para Farenheit ou
  Digite 2 para: Farenheit para Celsius <input type="number" name="opt" /><br/>
  Temperatura:<input type="number" name="number"><br>
  <input type="submit" name="submit" value="Calcular"<br/>
 </form> 
 <?php
  $op = $_POST['opt'];
  $temp = $_POST['number'];
  
  if($op==1)
   echo "Temperatura em Farenheit: ".CtoF($temp);
  elseif($op==2)
   echo "Temperatura em Celsius: ".FtoC($temp);
  else
   echo "Opção inválida";
   
  
  function CtoF($temperatura){
   return ($temperatura*9/5) + 32;
  }
  function FtoC($temperatura){
   return ($temperatura-32)*5/9;
  }
 ?>
 </body>
</html>