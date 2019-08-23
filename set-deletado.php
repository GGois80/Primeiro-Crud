<?php
	require_once 'conexao.php';

	$nome = $_POST['nome'];
	$sexo = $_POST['sexo'];
	$data = $_POST['data'];
	$obs = $_POST['obs'];
	$id = $_POST['id'];
	
	// print_r ($_POST);
	
	$query = "DELETE FROM funcionarios WHERE id_func = '$id'";
	$exe = mysqli_query($conexao, $query);
	if($exe == 1){
		echo "<script>alert('Dado Deletado') </script>";
	}else{
		echo "<script>alert ('Deu ruim') <script>";
	}
	
?>


<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<title>
		index
		</title>
	</head>
	<body>
		<form action="del-set.php" method="post"/>
			<p><input type="submit" value="Voltar"/></p>
		</form>

	</body>
</html>