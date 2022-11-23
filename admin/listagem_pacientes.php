<!-- marcas -->
<?php include "config.php";

$IdCliente = $_GET['id'];
$ClienteNome = $_GET['nome'];
?>

<h1>Pacientes de <?php echo $ClienteNome;?></h1>
<div class="container px-4 px-lg-5 mt-5">
  <div class="row">
    <a href="./index.php?page=incluir/Paciente_incluir.php&id=<?php echo $IdCliente;?>">Incluir Paciente</a>
    <table class="table table-striped">
      <thead class="thead-dark">
        <td>Código</td>
        <td>Nome Paciente</td>
        <td>Data de nascimento paciente</td>
        

      </thead>
      <?php
     
      if (@$_GET['acao'] == 'excluir') {

      }

      $conn = Conectar();

      $query = "SELECT * FROM paciente where FkIdClienteInPaciente = $IdCliente
      
      order by FkIdClienteInPaciente";
     

      $result = $conn->query($query);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {      
      ?>
          <tr>
            <td><?php echo $row['IdPaciente']; ?></td>
            <td><?php echo $row['NomePaciente']; ?></td>
            <td><?php echo $row['DataDeNascimentoPaciente'];?></td>
            <td>
              <a href="./index.php?page=Alterar/Paciente_Alterar.php&id=<?php echo $row['IdPaciente'];?>">Alterar</a>
              <a href="./index.php?page=excluir/Paciente_Excluir.php&acao=excluir&id=<?php echo $row['IdPaciente'];?>">Excluir</a>
            </td>
          </tr>
          <?php }}
           ?>
    </table>
  </div>
</div>