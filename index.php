<?php
	require_once 'menu.php';
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>
			index
		</title>
	</head>
	<body>
		<h2> Cadastro de Setor</h2> 
		
		<form action="setor.php" method="post"/>
		<p> Digite nome do Setor:<input type="text" name="nome"/> </p>
			<p><input type="submit" value="Cadastrar"/></p>
		</form>
	</body>
</html>

