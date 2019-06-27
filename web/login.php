<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
</head>
<body>
	<?php
	// $user = $_POST("user");
	// $password = $_POST("password");

	$connection = mysqli_connect("localhost","root","root","test_db");

	$query = "SELECT * FROM login WHERE user = '".$user."' AND senha = '".$password."'";
	$sql = mysqli_query($query);
	$result = mysqli_num_rows($sql);

	if ($result) {
		echo "<h1>Login efetuado com sucesso.</h1>";
	}else{
		echo "<h1>Erro login e senhas incorretos.</h1>";
	}
	?>
</body>
</html>