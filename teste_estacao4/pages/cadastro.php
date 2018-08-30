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

		<form action="../model/cadastrar_produto.php" method="post">

			<div class="form-group" style="margin: auto; margin-top: 100px; width: 900px; border-radius: 5px;">

				<div class="input-group mb-1">

  					<div class="input-group-prepend">

    					<span class="input-group-text" id="inputGroup-sizing-default">Nome</span>

  					</div>

  					<input type="text" name="txtNome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

				</div>

				<br/>
				<br/>

				<div class="input-group mb-1">

  					<div class="input-group-prepend">

    					<span class="input-group-text" id="inputGroup-sizing-default">Descrição</span>

  					</div>

  					<input type="text" name="txtDescricao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

				</div>

				<br/>
				<br/>

				<div class="input-group mb-1">

  					<div class="input-group-prepend">

    					<span class="input-group-text" id="inputGroup-sizing-default">Preço R$</span>

  					</div>

  					<input type="number" name="txtValor" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

				</div>

				<br/>
				<br/>

				<button type="submit" class="btn btn-primary" name="btnCadastrar" style="float: right;">Cadastrar</button>

				<button type="reset" class="btn btn-danger" name="btnLimpar" style="float: right; margin-right: 4px">Limpar</button>

				<a href="../home.php" class="btn btn-primary btn-sm active" tabindex="-1" role="button" aria-disabled="true" style="float: left; margin-top: 4px">Home</a>

			</div>

		

	</body>

</html>