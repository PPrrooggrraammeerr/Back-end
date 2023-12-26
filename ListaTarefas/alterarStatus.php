<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/alterarStatus.css">
    <title> Alterar status </title>
</head>
<body>
    <form method="post">
        <h2> Alterar status </h2>
        <br>
        <h3> O status da tarefa deve ser 'Andamento' ou 'Concluída'. </h3>
        <hr>
        <br>
        <div>
            <input type="text" name="ID" placeholder="ID" required>
            <br> <br>
            <input type="text" name="alterarStatus" placeholder="Status" required>
            <br> <br>
        </div>
        <a href="index.php" class="voltar"> Voltar </a>
        <button type="submit" value="Alterar" class="botao"> Alterar </button>
        <br>
        <br>
    </form>
</body>
</html>
<?php

include 'ListaTarefas.class.php';

if (isset($_POST['ID'], $_POST['alterarStatus'])) {
    $tarefas = new ListaTarefas($pdo);
    [$id, $status] = [$_POST['ID'], $_POST['alterarStatus']];

    if (in_array($status, ["Andamento", "Concluída"])) {
        $tarefas->alterarStatus($id, $status);
        echo '<script>alert("Status atualizado!");</script>';
    } else {
        echo '<script>alert("O status deve ser \'Andamento\' ou \'Concluída\'.");</script>';
    }
}

?>