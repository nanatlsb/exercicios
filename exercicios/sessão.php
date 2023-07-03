<?php
session_start();
include_once 'conexao.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuarios (nome, senha, created) VALUES ('$nome', '$senha', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg']="Usuario cadastrado com sucesso";
    header("Location: index.php"); 
} else{
header("Location:index.php ");
}
?>