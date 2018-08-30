<?php 

require "../banco/conexao.php";

	$excluir = implode( ',', $_POST['check'] );

	//a linha abaixo apaga todos os produtos selecionados em um array
	mysqli_query($conn, "DELETE FROM produtos WHERE id IN ($excluir)");

?>

<script type="text/javascript">

	alert("Produtos Selecionados Apagados com Sucesso!!");
	window.location.href='../pages/lista.php';

</script>