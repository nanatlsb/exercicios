<!DOCTYPE html>
<html>
<head>
<title>Função 3</title>
<meta charset="UTF-8">

<style>
body {
   /* Background pattern from Toptal Subtle Patterns */
   height: 400px;
   width: 100%;
   background-image: url("60359.jpg");
}
</style>

<script src="meuscript.js"></script>
<?php

function hipotenusa($cat0,$catA)
{
    $h=sqrt(($catO*$catO)+($catA*$catA));
    return $h;

}
?>
</head>

<body>
<form action="#" method="POST">
cateto oposto: <input type="number"
name="oposto"><br>
cateto adjacente: <input type="number"
name="adjacente"><br>
<input type="submit" value="hipotenusa">
</form>
<?php

if(!empty($_POST))
{
    $catetoO=$_POST['oposto'];
    $catetoA=$_POST['adjacente'];
    echo "hipotenusa é:". hipotenusa($catetoO,$catetoA);

}
?>
</body>
</html>
