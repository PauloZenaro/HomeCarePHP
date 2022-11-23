
<?php 
include "./protect.php";

$Id = $_GET['idanuncio'];
$conn = Conectar();

$query = "SELECT * FROM anuncios where IdAnuncio = $Id";

$result = $conn->query($query);

if ($result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {      

?>
<div class="container">

<div id="corpo-form-cad">
<h1>Detalhes Anuncio</h1>
    <div>
        <label>Código do anuncio:</label>
        <input type="text" name="Id" size="50" Value ="<?php echo $row['IdAnuncio'];?>" readonly/>
    </div>
    <br />
    <div>
        <label>Id Criador:</label>
        <input type="text" name="LoginUsuario" size="30" Value ="<?php echo $row['FkIdClienteCriadorInAnuncios'];?>" readonly/>
    </div>
    
    <br />
    <div class=>
        <label>Paciente:</label>
        <input type="text" name="LoginUsuario" size="30" Value ="<?php echo $row['FkIdClienteCriadorInAnuncios'];?>" readonly/>
    </div>
    <br />

    <div>
        <label>Data De Criação:</label>
        <input type="date" name="DataDeNascimentoUsuario" Value ="<?php echo $row['DataDeCriacao']?>" readonly/>
    </div>
    <br />
    <div>
        <label>Data do serviço</label>
        <input type="date" name="DataDeNascimentoUsuario" Value ="<?php echo $row['DataDeCriacao']?>" readonly/>
    </div>
    <br />
    <div>
        <label>Aberto:</label>
        <input type="text" name="aberto" size="15" Value ="<?php if($row['Aberto'] == 1) echo "sim"; else echo "Não";?>" readonly/>
    </div>
    <br>
    <div>
        <label>Numero de candidatos:</label>
        <input type="text" name="aberto" size="15" Value ="" readonly/>
    </div>
    <br />
    <div>
        <label for='DescricaoAnuncio'>Descrição do Serviço:</label><br>
        <textarea id=DescricaoAnuncio name="DescricaoAnuncio" maxlength="300" size="100" rows="5" cols="100" placeholder="<?php echo $row['DescricaoAnuncio']?>" readonly></textarea>
    </div>
    <br>
        <form method="POST" action="Candidatar_post.php">
        <input hidden type="text" name="idanuncio" value=<?php echo $Id;?>>
        <input type="submit" id="botao" name = "botao" value="Candidatar-se">
        </form>
        <br>
        <form method="POST" action="Desistir_post.php">
        <input hidden type="text" name="idanuncio" value=<?php echo $Id;?>>
        <input type="submit" id="botao" name = "botao" value="Desistir">
        </form>
    </div>
</div>
<?php } } ?>