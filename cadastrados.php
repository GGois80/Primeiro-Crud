<?php
	require_once 'conexao.php';

	$nome_func = $_POST["nome"];
	$sexo_func = $_POST["sexo"];
	$data_nasc = $_POST["data"];
	$observacoes = $_POST["obs"];
	$idSetor = $_POST["setor"];
	
	
	$query="INSERT INTO funcionarios (nome_func, sexo_func, data_nasc, observacoes, idSetor) VALUES ('$nome_func', '$sexo_func', '$data_nasc', '$observacoes', '$idSetor')";
	//echo $query;exit;
	$insere= mysqli_query ($conexao,$query);
	if($insere==1){
		echo "<script>alert ('Dados inseridos com sucesso') </script> ";
	}else{
		echo "<script>alert ('Deu ruim') </script> ";
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
		<form action="funcionarios.php" method="post"/>
			<p><input type="submit" value="Voltar"/></p>
		</form>

	</body>
</html>