<?php
	require_once 'conexao.php';
	
	$nome = $_POST['nome'];
	$id = $_POST['id'];
	
	$query = "UPDATE setores SET nome = '$nome' WHERE id_setores = $id";
	//echo $query;exit;
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
		<form action="atualizacao.php" method="post"/>
			<p><input type="submit" value="Voltar" size="1000px"  /></p>
		</form>

	</body>
</html>