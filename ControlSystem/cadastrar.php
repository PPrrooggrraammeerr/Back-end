<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/cadastrar.css">
	<title> Cadastre-se </title>
</head>
<body>
	<form method="post">
		<h2> Cadastre-se </h2>
		<hr>
		<br>
		<div>
			<input type="text" name="nome" placeholder="Usuário" required>
			<br> <br>
			<input type="email" name="email" placeholder="E-mail" required>
			<br> <br>
			<input type="password" name="senha" placeholder="Senha" required>
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

include 'user.class.php';

$usuario = new Usuario();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = addslashes($_POST['nome']);
    $senha = md5(addslashes($_POST['senha']));
    $email = addslashes($_POST['email']);

    $usuario->adicionarUsuario($nome, $email, $senha);    
}

?>

