<?php

	require '../banco/conexao.php';

	$id=htmlspecialchars($_POST['txtId']);

	$nome=htmlspecialchars($_POST['txtNome']);

	$descricao=htmlspecialchars($_POST['txtDescricao']);

	$valor=htmlspecialchars($_POST['txtValor']);

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
	
		//a linha abaixa da o update dos dados no banco
		if(mysqli_query($conn, "UPDATE produtos SET nome='$nome', descricao='$descricao', preco='$valor' WHERE id='$id'")){
		
			?>

				<script type="text/javascript">
		
					alert("Produto Atualizado com Sucesso!!!");
				
					window.location.href='../pages/lista.php';
				
				</script>
	
			<?php
	
		}
	}
	
?>