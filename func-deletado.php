<?php
	require_once 'conexao.php';

	$nome = $_POST['nome'];
	$sexo = $_POST['sexo'];
	$data = $_POST['data'];
	$obs = $_POST['obs'];
	$id = $_POST['id'];
	
	// print_r ($_POST);
	
	$query = "DELETE FROM funcionarios WHERE id_func = '$id'";
	$exe = mysqli_query($conexao, $query);
	if($exe == 1){
		echo "<script>alert('Dado Deletado') </script>";
	}else{
		echo "<script>alert ('Deu ruim') <script>";
	}
	
?>