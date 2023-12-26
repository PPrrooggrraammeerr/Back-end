<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles/adicionarTarefas.css">
	<title> Adicionar tarefas </title>
</head>
<body>
	<form method="post">
		<h2> Adicionar tarefas </h2>
		<hr>
		<br>
		<div>
			<input type="text" name="nomeTarefa" placeholder="Tarefa" required>
			<br> <br>
		</div>
		<a href="index.php" class="voltar"> Voltar </a>
		<button type="submit" value="Enviar" class="botao"> Enviar </button>
		<br>
		<br>
	</form>
</body>
</html>
<?php

include 'ListaTarefas.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nomeTarefa'])) {
	$tarefas = new ListaTarefas($pdo);
	$nomeTarefa = $_POST['nomeTarefa'];
	$tarefas->adicionarTarefa($nomeTarefa);

	echo '<script> alert("Tarefa adicionada!")</script>';
}

?>
