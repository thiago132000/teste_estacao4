<?php

	require "../banco/conexao.php";
	
	$excluirPro= htmlspecialchars($_GET['excluirPro']);
	
	mysqli_query($conn, "DELETE FROM produtos WHERE id='$excluirPro'");


?>

<script type="text/javascript">

	alert("Produto Excluido com Sucesso!!!");
	window.location.href='../pages/lista.php';

</script>