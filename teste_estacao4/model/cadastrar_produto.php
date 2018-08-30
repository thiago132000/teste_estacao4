<?php

	require "../banco/conexao.php";

	$nome = htmlspecialchars($_POST['txtNome']);

	$descricao = htmlspecialchars($_POST['txtDescricao']);

	$valor = htmlspecialchars($_POST['txtValor']);

	if($nome == "" || $nome == " " ){

		echo"<script>alert('Preencha o Campo Nome!!! '); window.location.href='../pages/cadastro.php';</script>";
	}

	else if($descricao == "" || $descricao == " "){

		echo"<script>alert('Preencha o Campo Descrição!!! '); window.location.href='../pages/cadastro.php';</script>";
	}

	else if($valor == "" || $valor == " "){

		echo"<script>alert('Preencha o Campo Valor!!! '); window.location.href='../pages/cadastro.php';</script>";
	}

	else{

		//a linha abaixo prepara a conexão com o banco
		$insert = $conn->prepare("INSERT INTO produtos (nome, descricao, preco) VALUES(?, ?, ?)");

		//a linha abaixo insere os valores
		$insert->bind_param("ssd", $nome, $descricao, $valor);

		//a linha abaixo executa o banco
		$insert->execute();

		//a linha abaixo fecha a conexão
		$conn->close();

	echo"<script>alert('Produto Cadastrado com Sucesso!!! '); window.location.href='../pages/cadastro.php';</script>";

	}

 ?>
