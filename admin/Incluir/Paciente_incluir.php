<h1>Inclusão de Paciente</h1>
<!-- Clientes_incluir -->
<?php include "paciente_incluir_post.php"; ?>
<form method="post" enctype="multipart/form-data" target="/admin/Incluir/Paciente_Incluir_post.php">
    
    <div>
        <label>Id</label>
        <input type="text" name="id" value="<?php echo $_GET['id']; ?>" readonly><br><br>
    </div>
    <div>
        <label for="NomePaciente">Nome Do Paciente:</label>
        <input type="text" name="NomePaciente" size="50" />
    </div>
    <br />
    <div>
        <label>Data De Nascimento:</label>
        <input type="date" name="DataDeNascimentoPaciente" />
    </div>
    <br />

    <div class="button">
        <input type="submit" name="botao">
    </div>
</form>