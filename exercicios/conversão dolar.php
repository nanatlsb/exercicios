<!DOCTYPE html>
<html>
<head>
<title>Conversâo em dolar</title>
<meta charset="UTF-8">
<?php
function conversao($dolar,$real,$conversao)
{
$conversao =(($real * $dolar)/ 5.54);
return $conversao;
}
?>
</head>

<style>
        body{
            background-image: url(545909.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            }
        </style>
<body>
<form action="#" method="POST">
Digite o valor em reais: <input type ="number" name="real"><br>
Digite a quantidade em dolar: <input type ="number" name="dolar"><br>
<input type="submit"value="dolar">
</form>
<?php
if(!empty($_POST))
{
    $dolar=$_POST['dolar'];
    $real=$_POST['real'];
echo "O valor em dolar é:".dolar($conversao);

}
?>
</body>
</html>