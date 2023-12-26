<?php

require 'user.class.php';

$usuario = new Usuario();

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $usuario->deletarUsuario($id);

    header("Location: index.php");
}

?>
