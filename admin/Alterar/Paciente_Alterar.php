<h1>Alterar Paciente</h1>

<?php 
include "Alterar/Paciente_Alterar_post.php"; 
$Id = $_GET['id'];
$conn = Conectar();

$query = "SELECT * FROM paciente where IdPaciente = $Id
";

$result = $conn->query($query);

if ($result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {      

?>
<form method="post" enctype="multipart/form-data" target="Alterar/Paciente_Alterar_post.php">
<div>
        <label>Id Paciente</label>
        <input type="text" name="IdPaciente" value="<?php echo $row['IdPaciente']; ?>" readonly><br><br>
    </div>
    <div>
        <label for="NomePaciente">Nome Do Paciente:</label>
        <input type="text" name="NomePaciente" size="50" value="<?php echo $row['NomePaciente']; ?>"/>
    </div>
    <br />
    <div>
        <label>Data De Nascimento:</label>
        <input type="date" name="DataDeNascimentoPaciente" value="<?php echo $row['DataDeNascimentoPaciente'];?>"/>
    </div>
    <br />

    <div class="button">
        <input type="submit" name="botao">
    </div>
</form>

<?php } } ?>