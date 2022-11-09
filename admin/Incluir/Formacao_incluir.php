<h1>Inclusão de Contato</h1>
<!-- Clientes_incluir -->
<?php include "Formacao_Incluir_post.php"; ?>
<form method="post" enctype="multipart/form-data" target="/admin/Incluir/Formacao_Incluir_post.php">
    <div>
        <label>Id</label>
        <input type="text" name="id" value="<?php echo $_GET['id']; ?>" readonly><br><br>
    </div>
    <div>
        <label for="Instituicao">Instituição:</label>
        <input type="text" name="Instituicao" maxlength="50" size="50" />
    </div>

    <div>
        <label for='Formacao'>Formação:</label><br>
        <textarea id=Formacao name="Formacao" maxlength="300" size="100" rows="5" cols="100" require></textarea>
    </div>
    <br />
    <div class="button">
        <input type="submit" name="botao">
    </div>
</form>