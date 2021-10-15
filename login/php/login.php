<?php
session_start();
include('conexao.php');

/* caso os campos estiverem vazios*/

if(empty($_POST['usuario']) || empty($_POST['senha']))
{
	header('Location: ./../index.php');
	exit();
}

/* obter os dados que o usuario digitou*/

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

/* validar dados digitados*/

$query = "select id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

/* mandar resultado para uma variavel*/

$result = mysqli_query($conexao, $query);

/* mandar resultado para uma função interpretar como 0 ou 1*/

$row = mysqli_num_rows($result);

/* redirecionamento e sessao para o painel ou nao*/

if($row == 1){
	$_SESSION['usuario'] = $usuario;
	header('Location: ./../painel.php');
	exit();
} else {

	/* detecçao para mensagem de erro de "usuario invalido" */

	$_SESSION['nao_autenticado'] = true;

/* redirecionamento para pagina principal */

	header('Location: ./../index.php');
	exit();
}

