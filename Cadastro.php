<?php
include("eco_sessao.php")
include("eco_inicio.html")
$conexao = mysqli_connect('localhost','root','','Projeto3DS');
$fechar = mysqli_close($conexao);

include("eco_final.html")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inserir_clienteEstado.php" method="get">
        nome <br><input type="text" name="Nome"><br><br> 
        cpf <br><input type="text" name="Cpf"><br>     
        Email<br> <input type="text" name="email"><br>
        Telefone <br><input type="text" name="telefone"><br>
        Senha<br> <input type="text" name="senha"><br><br>
        <input type="submit" value = "Cadastrar">
    </form>
</body>
</html>