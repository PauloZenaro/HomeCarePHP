<?php
	require_once 'classes/usuarios.php';
	$u = new usuario;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<style>
		
		div#msg-sucesso{
	width: 400px;
	margin: 10px auto;
	padding: 10px;
	background-color: rgba(50,205,50,.3);
	border: 1px solid rgba(34,39,34);
}


div.msg-erro{
	width: 400px;
	margin: 10px auto;
	padding: 10px;
	background-color: rgba(250, 128, 114,.3);
	border: 1px solid rgba(165,42,42);
}



body{
			background-color: #006A7A; 
			padding-top: 150px;
			background-position-x: 0;
			background-position-y: 0;
			background-repeat: no-repeat;
		}

	</style>


<div class="btn-group btn-group-lg btn-group-justified">
		<a href="index.php" class="btn btn-info">
		  <span class="glyphicon glyphicon-user"></span> Login
		</a>
		<a href="cadastrar.php" class="btn btn-info">
		  <span class="glyphicon glyphicon-user"></span> Cadastrar
		</a>
		</div>
		<br><br><br>

</head>
<body>
	<div id="corpo-form-cad">
	<form method="POST">
	<h1>Cadastro</h1>
<form action="" method="POST">
        <label>Login:</label><input type="text" name="LoginUsuario"><br>
        <label>Senha:</label><input type="password" name="senha"><br>
        <br/>
        <input class="btn btn-primary btn-lg btn-block" type="submit">

</form>
    

    
	</form>
</div>

<?php 
	include "config.php";
	$page = @$_GET['page'];

	if ($page != '') {
		if (file_exists($page . ".php"))
			include $page . ".php";
		else
			echo "Página não encontrada !";
	} else
		include "Login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<style>
		body{
			background-color: #006a7a; 
			background-image: url();
			padding-top: 150px;
			background-position-x: 0;
			background-position-y: 0;
			background-repeat: no-repeat;
		}

		h1{
			color:black;
		}

	</style>

<div class="btn-group btn-group-lg btn-group-justified">
		<a href="index.php">

	</div>
	<br><br><br>


	</head>
	</div>