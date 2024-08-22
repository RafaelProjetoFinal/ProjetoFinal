<?php
include("eco_inicio.html")
session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
$conexao = mysqli_connect('localhost','root','','ecommerce_atv');
$sql = "select * from usuarios where login like '$login' and senha like '$senha'";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
if($res['nome']!=Null){
    echo "Logado com sucesso!";
	$_SESSION['nome'] = $res['nome'];
}
else{
    echo "Login e/ou senha incorretos! <a href='login.html'>Tentar Novamente</a>";
}
$fechar = mysqli_close($conexao);

include("eco_final.html")
?>