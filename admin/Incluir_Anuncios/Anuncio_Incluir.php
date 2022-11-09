<?php include "Anuncio_Incluir_post.php";

$Id = $_GET['id'];
$Data = date('d/m/Y');

$SqlRequest = "SELECT * from cliente
order by Id";

$conn = Conectar();

$result = $conn->query($SqlRequest);

?>

<h1>Inclusão de Anuncio</h1>

<form method="GET" enctype="multipart/form-data" target="">
    <div>
    <label for="id">Id Criador:</label>
            <select id="id" name="id">

            <?php if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {?>
                        <option value="<?php echo $row['Id'];?>"><?php echo $row['Id'];?></option>
                        <?php
            }
            }
            ?>
    </div>
    <br>
    <div class="button">
            <input type="submit">
    </div>
</form>

<?php 
if( $Id != 0) { ?>
    
<form method="post" enctype="multipart/form-data" target="/admin/Incluir/Anuncio_Incluir_post.php">

    <div>
        <label>Criador</label>
        <input type="text" name="id" value="<?php echo $_GET['nome']; ?>" readonly><br><br>
    </div>
    <div>
        <label for="FkIdPacienteInAnuncios">Paciente:</label>
        <select id="FkIdPacienteInAnuncios" name="FkIdPacienteInAnuncios">

            <?php if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {?>
                        <option value="<?php echo $row['IdPaciente'];?>"><?php echo $row['NomePaciente'];?></option>
                        <?php
            }
            }
            ?>
        </select>

    </div>
        <br>
    <div>
        <label>Data De Criação:</label>
        <label><?php echo $Data;?></label>
    </div>
        <br>
    <div>
        <label>Data Do Serviço:</label>
        <input type="date" value="" name="DataServico"/>
    </div>
        <br>
    <div>
        <label for='DescricaoAnuncio'>Descrição do Serviço:</label><br>
        <textarea id=DescricaoAnuncio name="DescricaoAnuncio" maxlength="300" size="100" rows="5" cols="100" require></textarea>
    </div>
    <br />
    <div class="button">
        <input type="submit" id="botao" name="botao">
    </div>
</form>

<?php } ?>