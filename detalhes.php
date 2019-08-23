<meta charset = "utf-8">
<?php
	require_once 'conexao.php';
	require_once 'menu.php';
	
	$id_funcionario = $_GET["id"];
	
	
	$sql = "SELECT s.nome AS nome_setor, nome_func, f.sexo_func, f.data_nasc, f.observacoes
	FROM funcionarios AS f INNER JOIN setores AS s ON s.id_setores = f.idSetor WHERE id_func = $id_funcionario"; 
	
	$the=mysqli_query ($conexao, $sql);
	$funcionarios = mysqli_fetch_array($the);
	
	
	//print_r($the);exit;

	
	echo "<table border='5px'>
		<tr>
			<td>Nome</td>
			<td>Sexo</td>
			<td>Data de nascimento</td>
			<td>OBS</td>
			<td>setor</td>
		</tr>
		
		<tr>
			<td>$funcionarios[nome_func] </td>
			<td>$funcionarios[sexo_func] </td>
			<td>$funcionarios[data_nasc] </td>	
			<td>$funcionarios[observacoes] </td>
			<td>$funcionarios[nome_setor] </td>
		</tr>
	</table>";
	

?>

