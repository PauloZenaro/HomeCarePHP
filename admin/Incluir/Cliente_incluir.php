<h1>Inclusão de Cliente</h1>
<!-- Clientes_incluir -->
<?php include "Cliente_incluir_post.php"; ?>
<form method="post" enctype="multipart/form-data" target="Cliente_incluir_post.php">
    <div>
        <label>Nome:</label>
        <input type="text" name="Nome" size="50" required />
    </div>
    <br/>
    <div>
        <label>Login:</label>
        <input type="text" name="LoginUsuario" size="30" required />
    </div>
    <br/>
    <div>
        <label>Senha:</label>
        <input type="password" name="Senha" size="50" required/>
    </div>
    <br/>
    <div>
        <label>Data De Nascimento:</label>
        <input type="date" name="DataDeNascimentoUsuario" required/>
    </div>
    <br/>
    <div>
        <label>CPF:</label>
        <input type="text" name="Cpf" size="15" required/>
    </div>
    <br/>
    <div>
        <label>Rg:</label>
        <input type="text" name="Rg" size="15" />
    </div>
    <br/>
    <div>
        <label>Email:</label>
        <input type="email" name="email" required/>
    </div>
    <br/>
    <div>
        <label>Foto de perfil:</label>
        <input type="file" name="Foto" required/>
    </div>
    <br/>
    <div class="button">
        <input type="submit" name="botao">
    </div>
</form>