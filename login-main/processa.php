<?php
include_once("conexao.php");
$nome = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST,'email');
$telefone = filter_input(INPUT_POST,'telefone');
$senha = filter_input (INPUT_POST,'senha');
$confirma_senha = filter_input (INPUT_POST,'confirma_senha');



$result_usuario = "INSERT INTO usuario(nome, email, telefone, senha, confirma senha ) VALUES ('$senha', '$email', '$telefone', '$senha' '$confirma_senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);


if($senha == $confirma_senha )
{
    header('Location: login.php');
}

else
{
    echo"senha e confirma senha nao correspondem";
}
?>