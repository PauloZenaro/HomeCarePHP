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


        header("Location: ./index.php?page=Home.php"); 
        #$page = "./index.php?page=Home";
    }
    else
    {
        echo "Falha ao logar! E-mail ou senha incorretos";
    }
}}

?>
<div class="btn-group btn-group-lg btn-group-justified">
		<a href="./index.php?page=cadastrar.php" class="btn btn-info">
		  <span class="glyphicon glyphicon-user"></span> Cadastrar
		</a>
		</div>
		<br>

        <div id="corpo-form-cad">
        <form action="" method="POST">
        <label>Login:</label><input type="text" name="LoginUsuario"><br>
        <label>Senha:</label><input type="password" name="senha"><br>

        <br/>
        </div>
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Entrar">

</form>
