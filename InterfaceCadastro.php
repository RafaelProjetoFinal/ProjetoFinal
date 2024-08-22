<?php
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$telefone = $_GET['telefone'];
$email = $_GET['email']
$senha = $_GET['senha'];

$conexao = mysqli_connect('localhost','root','','Projeto3DS');
$sql = "insert into Clientes (nome, cpf, telefone, email, senha) values ('$nome', '$cpf', '$telefone', $email', '$senha')";
echo"$sql";
$executar = mysqli_query($conexao, $sql);
$fechar = mysqli_close($conexao);

?>