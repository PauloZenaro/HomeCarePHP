<?php 
 
#$LoginUsuario = $_POST['LoginUsuario'];
#$senha = $_POST['senha'];

if(isset($_POST['LoginUsuario']) || isset($_POST['senha'])) {
    
    if(strlen($_POST['LoginUsuario']) == 0 )
        {
        echo "Preencha o campo login";
        }
    else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    }

    else
        {

        $conn = Conectar();
        $LoginUsuario = $conn->real_escape_string($_POST['LoginUsuario']);
        $senha = $conn->real_escape_string($_POST['senha']);


        $sql_code = "SELECT * FROM cliente WHERE LoginUsuario = '$LoginUsuario' AND senha = '$senha'";

        $sql_query = $conn->query($sql_code) or die("falha na execução" . $conn->error);
        $quantidade = $sql_query->num_rows;
     
        

    if($quantidade == 1 )
        {
        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }
        $_SESSION ['id'] = $usuario['Id']; 
        $_SESSION ['nome'] = $usuario['Nome']; 


        header("Location: ./index.php?page=Home"); 
        #$page = "./index.php?page=Home";
    }
    else
    {
        echo "Falha ao logar! E-mail ou senha incorretos";
    }
}}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro de Usuário </title>
</head>
<body>
    <h1>Cadastro</h1>
<form action="" method="POST">
        <label>Login:</label><input type="text" name="LoginUsuario"><br>
        <label>Senha:</label><input type="password" name="senha"><br>
        <br/>
        <input class="btn btn-primary btn-lg btn-block" type="submit">

    </form>
    <br/>
    <a class="btn btn-primary btn-lg btn-block"  href="./index.php?page=Cadastro/Cadastro">Cadastar</a>
</body>
</html>