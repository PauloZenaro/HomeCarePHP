<?php
include "protect.php";
$conn = Conectar();

$query = "SELECT * FROM anuncios a LEFT JOIN cliente c on a.FkIdClienteCriadorInAnuncios = c.Id JOIN paciente p on a.FkIdPacienteInAnuncios = p.IdPaciente;";


$result = $conn->query($query);
?>


<div class="container bg-warning">
<a href="./index.php?page=logout.php">Sair</a>
        <table class="table table-striped">
      <thead class="thead-dark">
        <td>Código Anuncio</td>
        <td>Dono do anuncio</td>
        <td>Paciente</td>

    <div class="row">
    
       <div class="col-11">
        <h2>Bem vindo, <?php echo $_SESSION['nome'];?></h2>
        
        <h1>Anuncios disponíveis</h1>
        
    </div>

        <div class="row">
            <div class="col-2">
            <?php
              if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {     
                
            ?>

            <tr>
            <td><?php echo $row['IdAnuncio']; ?></td>
            <td><?php echo $row['Nome']; ?></td>
            <td><?php echo $row['NomePaciente'];?></td>
            <td>
              <a href="index.php?page=Detalhes_Anuncio.php&idanuncio=<?php echo $row['IdAnuncio'];?>">Detalhes</a>
            </td>
          </tr>
                   
            </div>
        </div>
    </div>
    
</div>

<?php } } ?>
  </div>
  <br>

<!--<div><a class="btn btn-primary btn-lg btn-block"  href="./index.php?page=logout">Sair</a></div>-->
