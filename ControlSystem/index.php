<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> ControlSystem </title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <h1> ControlSystem </h1>
    <a href="cadastrar.php">
        <button class="adicionar"> Adicionar </button>
    </a>
    <br> <br>
    <table border="1" class="control">
        <tr>
            <th> ID </th>
            <th> Usuário </th>
            <th> E-mail </th>
            <th> Ações </th>
        </tr>
        <?php
            include 'user.class.php';
            
            $usuario = new Usuario();    
            $lista = $usuario->getAll();

            foreach($lista as $item):
        ?>
            <tr>
                <td> <?php echo $item['id']; ?> </td>
                <td> <?php echo $item['nome']; ?> </td>
                <td> <?php echo $item['email']; ?> </td>
                <td>
                    <a href="excluir.php?id=<?php echo $item['id']; ?>">
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
