<?php
	require_once 'conexao.php';

	$nome = $_POST['nome'];
	$sexo = $_POST['sexo'];
	$data = $_POST['data'];
	$obs = $_POST['obs'];
	$setor = $_POST['setor'];
	$id = $_POST['id'];
	
	//print_r ($_POST);
	
	$query = "UPDATE funcionarios SET nome_func = '$nome', sexo_func = '$sexo', data_nasc = '$data', observacoes = '$obs', idSetor = '$setor' WHERE id_func = $id";
	$exe = mysqli_query($conexao, $query);
	if($exe == 1){
		echo "<script>alert('Dado Atualizado') </script>";
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
		<form action="afunc.php" method="post"/>
			<p><input type="submit" value="Voltar" size="1000px"  /></p>
		</form>

	</body>
</html>