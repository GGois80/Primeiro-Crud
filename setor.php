<?php
	require_once 'conexao.php';

	$nome = $_POST["nome"];
	
	/*if(strlen($nome) > 30){
		echo "<script>alert ('Caracteres excessivo') </script>";
	} else {
		echo "<script>alert ('cadastrado') </script>";
	}*/

	$query="INSERT INTO setores (nome) VALUES ('$nome')";
	$insere= mysqli_query ($conexao,$query);
	if($insere==1){
		echo " <script>alert ('Dados inseridos com sucesso') </script>";
	}else{
		echo "<script>alert ('Deu ruim') </script>";
	}
	
	
?>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	</head>
	<body>	
		<form action="index.php" method="post"/>
			<p><input type="submit" value="voltar"/></p>
		</form>
	</body>
</html>