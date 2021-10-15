<?php
session_start();
include('conexao.php');

//caso os campos estiverem vazios



        if ($_POST['senha'] == "") {
        	$_SESSION['igualdade'] = false;
            $mensagem = "O campo senha esta vazio.";
            header('Location: ./../cadastro_usuario.php');

        } else if ($_POST['senha'] == $_POST['repete_senha']) {
           	$_SESSION['igualdade'] = true;

           	$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
			$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
        	
        	$query = "INSERT INTO usuario (usuario, senha) VALUES ('{$usuario}', md5('{$senha}'))";

         	$result = mysqli_query($conexao, $query) or die(' Erro na query:' . $query . ' ' . mysql_error() ); 

         	if (!$result) {
  		  		$mensagem =  "Sem conexão com o Servidor"; 
         		}else{
         		$mensagem = "Cadastro Efetuado";
         		}

         	
            header('Location: ./../cadastro_usuario.php');	

        	} else {
        	$_SESSION['igualdade'] = false;
            $mensagem = "As senhas não conferem!";
            header('Location: ./../cadastro_usuario.php');
        	}         
         		
         		$_SESSION['mensagem_confirma_senha'] = $mensagem;
    

