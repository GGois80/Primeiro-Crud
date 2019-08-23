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
		atualização
		</title>
	</head>
	<body>
	
		<?php
			$query = "SELECT * FROM setores";
			$exe= mysqli_query ($conexao, $query);
			echo "<table border='5px'>
			<tr>
				<td> Nome setor </td>
				<td> Editar </td>
			</tr> ";
			
			while ($set=mysqli_fetch_array($exe)){
				echo"<tr>
					<form action='atualizado.php' method='post'>
						<td> <input type='text' name='nome' value='$set[nome]'/> </td>
						<td> <input type='submit' value='OK'> </td>
						<input type='hidden' name='id' value='$set[id_setores]'/>
					</form>	
					</tr>"; 
			}
		?>
		</table>
	</body>
</html>

		