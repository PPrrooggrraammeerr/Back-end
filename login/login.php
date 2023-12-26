<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> login </title>
</head>
<body>
<form method="post">
	<h1> login </h1>
	<hr>
	<label> E-mail: </label> <br>
	<input type="text" name="email" required placeholder="E-mail"> <br> <br>
	<label> Password: </label> <br>
	<input type="password" name="password" required placeholder="Password">
	<br> <br>
	<button> Enter </button>
</form>
</body>
</html>

<?php

if (isset($_POST['email'])) {
    
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);

    require 'user.class.php';

    $users = new User();

    $included = $users->add($email, $password);

    if ($included == true) {
        echo '<script>alert("Insert successful!")</script>';
    } else {
        echo '<script>alert("Insert not successful!")</script>';
    }
}

?>
