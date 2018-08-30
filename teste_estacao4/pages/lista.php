<!doctype html>

<html lang="pt-br">

	<head>
		
		<meta charset="utf-8">

		<title>Lista de Produtos</title>

		<meta name="author" content="Thiago Ferreira de Sousa">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script>
	
		function deletar(){
			
			var msg=confirm("Deseja Deletar ?");
			
			if(msg){ return true;}
			
			else{return false;}
			
		}
	
	</script>

	</head>

	<body>
		
		<h2 style="margin: auto; margin-top: 30px; width: 500px; text-align: center;" >Lista de Produtos</h2>

		<div class="form-group" style="margin: auto; margin-top: 100px; width: 1200px; border-radius: 5px;">

			<table class="table text-center">
				
				<thead class="thead-dark">
					<tr>
						<th scope="col">Checkbox</th>
						<th scope="col">Nome</th>
						<th scope="col">Descrição</th>
						<th scope="col">Valor</th>
						<th scope="col" colspan="2">Ações</th>
					</tr>
				</thead>
				
				<?php
			
				require '../banco/conexao.php';
				
				//a a linha abaixo puxa os dados da tabela produtos em ordem alfabetica e o while lista
				$query = mysqli_query($conn, "SELECT * FROM produtos ORDER BY nome ASC");
			
				while($puxaTab = mysqli_fetch_assoc($query)){
					
				?>
				
				<body>
					
					<form action="../model/deletar_produto_selecionado.php" method="post">

						<tr class="thead-light">

							<td>

								<input type="checkbox" name="check[]" value= "<?php echo $puxaTab ['id'];?>">
							
							</td>
				
							<td>
				
								<?php echo utf8_encode( $puxaTab ['nome']); ?>
					
							</td>
						
							<td>
				
								<?php echo utf8_encode( $puxaTab ['descricao']); ?>
					
							</td>
						
							<td>
				
								R$ <?php echo $puxaTab ['preco']; ?>
					
							</td>

							<td>
				
								<a class="btn btn-primary btn-sm active" tabindex="-1" role="button" aria-disabled="true" href="editar.php?editarPro=<?php echo $puxaTab['id']; ?>"> Editar </a>
						
				
							</td>
				
							<td>
				
								<a class="btn btn-danger btn-sm active" tabindex="-1" role="button" aria-disabled="true" href="../model/deletar_produto.php?excluirPro=<?php echo $puxaTab['id']; ?>" onclick="return confirm('Deseja Deletar ?')"> Deletar </a>
				
							</td>
				
						</tr>
			
					<?php } ?>
					
				</tbody>
				
			</table>

				<button type="submit" class="btn btn-danger" name="btnApagaSel" style="float: right;">Apagar Selecionados</button>

			</form>

			<a href="../home.php" class="btn btn-primary btn-sm active" tabindex="-1" role="button" aria-disabled="true" style="float: left; margin-top: 4px">Home</a>
		
	</div>

		</body>

</html>