<h1>Cadastro</h1>
<!-- Clientes_incluir -->

<form method="post" enctype="multipart/form-data" target="Cliente_incluir_post.php">
    <div>
        <label>Nome:</label>
        <input type="text" name="Nome" size="50" />
    </div>
    <br />
    <div>
        <label>Login:</label>
        <input type="text" name="Login" size="30" />
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
        <label>E-mail:</label>
        <input type="text" name="email" />
    </div>
    <br />

    <div>
        <input type="submit" name="botao" value="Salvar" />
    </div>
</form>