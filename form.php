<?php

$nome = $_POST['username'];
$email = $_POST['e-mail'];
$senha = $_POST['senha'];
$lembrar = $_POST['lembrar'];

$conexao = mysqli_connect('localhost','root','root','formulario',3306);

if (!$conexao) 
{
	die('Problemas com a conexão!');
}

$sql = "INSERT INTO formulario VALUES (null,'$nome','$email','$senha','$lembrar');";

if($conexao -> query($sql))
{
	//Executou no BD
	echo 'Cadastro Inserido com sucesso!';
}
else
{
	//Não executou no BD
	// echo mysqli_error($conexao);
	echo 'Problemas com a Execusão!';
}

// Fecha a conexão BD
mysqli_close($conexao);