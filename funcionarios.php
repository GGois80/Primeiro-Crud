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
		index
		</title>
	</head>
	<body>
		<h2>Cadastro de Funcionarios</h2>
	
		<form action="cadastrados.php" method="post"/>
		<p> Digite Nome:<input type="text" name="nome"/></p>
		<p>	Selecione Sexo:
			<input type="radio" name="sexo" value="m"> Masculino 
			<input type="radio" name="sexo" value="f"> Feminino 
		</p>
		<p> Insira Data de Nascimento:<input type="date" name="data"/></p>
		<p> Observações:<input type="text" name="obs"/></p>
		<p> Escolha a opção 
			<select name="setor"/>
			
				<?php
					$query="SELECT * FROM setores";
					$exe=mysqli_query ($conexao,$query);
					while ($arsetor = mysqli_fetch_array($exe)) {
						echo"<option value='$arsetor[id_setores]'> $arsetor[nome] </option>";
					}
				?>
				
			</select>
			</p>
			<p><input type="submit" value="Cadastrar"/></p>
		</form>
	</body>
</html>