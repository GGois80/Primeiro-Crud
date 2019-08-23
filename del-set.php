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
			$query = "SELECT * FROM funcionarios";
			$exe= mysqli_query ($conexao, $query);
			echo "<table border='5px'>
			<tr>
				<td> Nome funcionario </td>
				<td> Sexo funcionario </td>
				<td> Data Nascimento  </td>
				<td> 	Observações   </td>
				<td> excluir </td> 
			
			</tr> ";
			
			while ($set=mysqli_fetch_array($exe)){
				echo"<tr>
					<form action='set-deletado.php' method='post'>
					
						<td> <input type='text' name='nome' value='$set[nome_func]'/> </td>
						<td> <input type='text' name='sexo' value='$set[sexo_func]'/> </td>
						<td> <input type='text' name='data' value='$set[data_nasc]'/> </td>
						<td> <input type='text' name='obs' value='$set[observacoes]'/> </td>
						
						<td> <input type='submit' value='OK'> </td>
						<input type='hidden' name='id' value='$set[id_func]'/>
					
					</form>	
					</tr>";
			}
		?>
		</table>
	</body>
</html>