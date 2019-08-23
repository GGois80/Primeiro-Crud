<?php
	require_once 'conexao.php';
?>

<?php
	require_once 'menu.php';
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>
		to nem ai
		</title>
	</head>
	<body>
	
		<table border="5px">
			<tr>
				<td> Nome </td>
				<td> Detalhes </td>
			</tr>	
		
		<?php
			$query = "SELECT id_func, nome_func FROM funcionarios ORDER BY nome_func ASC";
			$lista = mysqli_query ($conexao,$query);
			
			while ($dados=mysqli_fetch_array($lista)){
				echo"<tr>
						<td>$dados[nome_func]</td>
						<td><a href='detalhes.php?id=$dados[id_func]'> VER </a> </td>
					</tr>";
			}
		?>
		</table>
	</body>
</html>