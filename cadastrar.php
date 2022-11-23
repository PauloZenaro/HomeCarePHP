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

</head>
<body><
	<div id="corpo-form-cad">
	<h1>Cadastrar</h1>
	<form method="POST" target="">
	<div>
        <label>Nome:</label>
        <input type="text" name="Nome" size="50" />
    </div>
    <br />
    <div>
        <label>Login:</label>
        <input type="text" name="LoginUsuario" size="30" />
    </div>
    <br />
    <div>
        <label>Senha:</label>
        <input type="password" name="Senha" size="50" />
    </div>
    <br />
    <div>
        <label>Data De Nascimento:</label>
        <input type="date" name="DataDeNascimentoUsuario" />
    </div>
    <br />
    <div>
        <label>CPF:</label>
        <input type="text" name="Cpf" size="15" />
    </div>
    <br />
    <div>
        <label>Rg:</label>
        <input type="text" name="Rg" size="15" />
    </div>
    <br />
    <div>
        <label>email:</label>
        <input type="email" name="email" />
    </div>
    <br />

    <div>
        <input type="submit" name="botao" value="Salvar" />
    </div>
	</form>
</div>

<?php
if(isset($_POST['nome']))
{
	$nome = addslashes($_POST['nome']);
	$telefone = addslashes($_POST['telefone']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$confirmarsenha = addslashes($_POST['confsenha']);

	if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarsenha))
	{
			$u->conectar("login","localhost","root","");
			if($u->msgErro == "")
			{
				if($senha == $confirmarsenha)
				{
					
					if($u->cadastrar($nome,$telefone,$email,$senha))
					{
						?>
						<div id="msg-sucesso">
						cadastrado com sucesso!
						</div>
						
						<?php
					}
					else
					{
						?>
						<div class="msg-erro">
						email ja cadastrado!
						</div>
						
						<?php
					}
				}
				else
				{
					?>
						<div class="msg-erro">
						senha e confirmar senha não corresponde!
						</div>
						
						<?php
					
				}
			}
			else
			{
				?>
				<div class="msg-erro">
			<?php echo "Erro: ".$u->msgErro;?>
				</div>
				<?php
			}
	}else
	{
		?>
						<div class="msg-erro">
						preencha todos os campos!
						</div>
						
						<?php
		
	}

}

?>
</html>