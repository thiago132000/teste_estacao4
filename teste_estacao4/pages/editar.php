<!doctype html>

<html lang="pt-br">

	<head>
		
		<meta charset="utf-8">

		<title>Pagina de Cadastro</title>

		<meta name="author" content="Thiago Ferreira de Sousa">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</head>

	<body>
		
		<h2 style="margin: auto; margin-top: 30px; width: 500px; text-align: center;" >Pagina de Cadastro de Produto</h2>

		<form action="../model/atualizar_produto.php" method="post">

			<div class="form-group" style="margin: auto; margin-top: 100px; width: 900px; border-radius: 5px;">

				<?php
		
					require '../banco/conexao.php';
			
					//a variavel abaixo puxa o id do produto da outra pagina para listar os dados referentes a ele
					$editarPro= $_GET['editarPro'];
					
					$puxaBanco = mysqli_query($conn, "SELECT * FROM produtos WHERE id='$editarPro'");
			
					$puxaTab = mysqli_fetch_assoc($puxaBanco);
		
				?>

				<input type="hidden" name="txtId" value="<?php echo $puxaTab['id'];?>">

				<div class="input-group mb-1">

  					<div class="input-group-prepend">

    					<span class="input-group-text" id="inputGroup-sizing-default">Nome</span>

  					</div>

  					<input type="text" name="txtNome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  value="<?php echo $puxaTab['nome'];?>">

				</div>

				<br/>
				<br/>

				<div class="input-group mb-1">

  					<div class="input-group-prepend">

    					<span class="input-group-text" id="inputGroup-sizing-default">Descrição</span>

  					</div>

  					<input type="text" name="txtDescricao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  value="<?php echo $puxaTab['descricao'];?>">

				</div>

				<br/>
				<br/>

				<div class="input-group mb-1">

  					<div class="input-group-prepend">

    					<span class="input-group-text" id="inputGroup-sizing-default">Preço R$</span>

  					</div>

  					<input type="number" name="txtValor" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  value="<?php echo $puxaTab['preco'];?>">

				</div>

				<br/>
				<br/>

				<button type="submit" class="btn btn-primary" name="btnAtualizar" style="float: right;">Atualizar</button>

				<a href="../home.php" class="btn btn-primary btn-sm active" tabindex="-1" role="button" aria-disabled="true" style="float: left; margin-top: 4px">Home</a>

			</div>

		</form>

	</body>

</html>