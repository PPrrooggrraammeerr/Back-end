<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> ListaTarefas </title>
    <link rel="stylesheet" type="text/css" href="styles/index.css">
</head>
<body>
    <div class="header">
        <h1> ListaTarefas </h1>
        <h1 class="right-aligned"> AlterarStatus </h1>
    </div>
    <div class="buttons">
        <a href="adicionarTarefas.php">
            <button class="adicionar"> Adicionar </button>
        </a>
        <a href="alterarStatus.php">
            <button class="alterarStatus right-aligned"> Alterar </button>
        </a>
    </div>
    <br> <br> <br>
    <table border="1" class="control">
        <tr> 
            <th> ID </th>
            <th> Tarefa </th>
            <th> Status </th>
            <th> Ações </th>
        </tr>
        <?php
            include 'ListaTarefas.class.php';

            $tarefas = new ListaTarefas($pdo);
            $lista = $tarefas->getAll();

            foreach($lista as $item):
        ?>
            <tr>
                <td> <?php echo '<h4>' . $item['id'] . '</h4>'; ?> </td>
                <td> <?php echo '<h4>' . $item['nomeTarefa'] . '</h4>'; ?> </td>
                <td> <?php echo '<h4>' . $item['status'] . '</h4>'; ?> </td>
                <td>
                    <a href="excluirTarefas.php?id=<?php echo $item['id']; ?>">
                        <button class="excluir"> Excluir </button>
                    </a>
                </td>
            </tr>
        <?php
            endforeach;
        ?>
    </table>
</body>
</html>