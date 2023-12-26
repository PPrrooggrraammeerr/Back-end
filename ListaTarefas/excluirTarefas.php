<?php

include 'ListaTarefas.class.php';

$tarefas = new ListaTarefas($pdo);

if (!empty($_GET['id'])) {
	$id = $_GET['id'];
	$tarefas->deletarTarefa($id);

	header('Location: index.php');
}

?>