<h1>Inclusão de Contato</h1>
<!-- Clientes_incluir -->
<?php include "Contato_Incluir_post.php"; ?>
<form method="post" enctype="multipart/form-data" target="/admin/Incluir/Contato_Incluir_post.php">
    
    <div>
        <label>Id</label>
        <input type="text" name="id" value="<?php echo $_GET['id']; ?>" readonly><br><br>
    </div>
    <div>
        <label for="NomePaciente">Telefone:</label>
        <input type="tel" name="Telefone" size="15" placeholder="XX XXXXX-XXXX" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" required/>
        <small>Formato: XX-XXXXX-XXXX (digite os traços)</small><br><br>
    </div>
    <br />
    <div>
        <label>NomeContato:</label>
        <input type="text" name="Contato" size="50" />
    </div>
    <br />
    <div class="button">
        <input type="submit" name="botao">
    </div>
</form>