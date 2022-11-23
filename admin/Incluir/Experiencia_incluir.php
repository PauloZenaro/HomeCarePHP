<h1>Inclusão de experiência</h1>
<!-- Clientes_incluir -->
<?php include "Experiencia_Incluir_post.php"; ?>
<form method="post" enctype="multipart/form-data" target="/admin/Incluir/Experiencia_Incluir_post.php">
    
    <div>
        <label>Id</label>
        <input type="text" name="id" value="<?php echo $_GET['id']; ?>" readonly><br><br>
    </div>
    <div>
        <label for='experiencia'>Experiencia:</label><br>
        <textarea id=experiencia name="experiencia" maxlength="300" size="100" rows="5" cols="100" require></textarea>
    </div>
    <br />
    <div class="button">
        <input type="submit" name="botao">
    </div>
</form>