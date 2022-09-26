<?php

include ("conexao.php");

$nome			=$_POST['nome'];
$nascimento		=$_POST['nascimento'];
$cpf			=$_POST['cpf'];

$sql = "INSERT INTO cadastro (nome, data_nascimento,cpf) VALUES ('$nome', '$data_nascimento' , '$cpf')";

if (mysqli_query ($conexao, $sql)){
	echo "Usuário incluído com sucesso!";
} else {
	echo "Erro:".mysqli_connect_error($conexao);
}

mysqli_close($conexao);

?>