<?php
	require_once 'classes/usuarios.php';
	$u = new usuario;

?>
<!DOCTYPE html>
<html>
<head>
	<title>HomeCare</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/login.css">
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

textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius: 30px;
  background-color: #006A7A;
  font-size: 16px;
  resize: none;
  
}
::placeholder{
	color: black;
}
	</style>

</head>

<body>
<div class="container">
<?php 
	include "config.php";
	$page = @$_GET['page'];

	if ($page != '') {
		if (file_exists($page))
			include $page;
		else
			echo "Página não encontrada !";
	} 
		else 
		include "Login.php";
?>
</div>
<!DOCTYPE html>
<html>

<div class="btn-group btn-group-lg btn-group-justified">
		<a href="index.php">

