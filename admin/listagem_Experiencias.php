<!-- marcas -->
<?php include "config.php";

$IdCliente = $_GET['id'];
$ClienteNome = $_GET['nome'];
?>

<h1>Experiencias de <?php echo $ClienteNome;?></h1>
<div class="container px-4 px-lg-5 mt-5">
  <div class="row">
    <a href="./index.php?page=incluir/Experiencia_incluir.php&id=<?php echo $IdCliente;?>">Incluir Experiência</a>
    <table class="table table-striped">
      <thead class="thead-dark">
        <td>Código</td>
        <td>Experiencia</td>
        

      </thead>
      <?php
     
      if (@$_GET['acao'] == 'excluir') {

      }

      $conn = Conectar();

      $query = "SELECT * FROM experiencia where FkIdClienteInExperiencia = $IdCliente
      
      order by IdExperiencia";
     

      $result = $conn->query($query);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {      
      ?>
          <tr>
            <td><?php echo $row['IdExperiencia']; ?></td>
            <td><?php echo $row['Experiencia']; ?></td>
            <td>
              <a href="./index.php?page=excluir/Experiencia_Excluir.php&acao=Alterar&id=<?php echo $row['IdExperiencia'];?>">Alterar</a>
              <a href="./index.php?page=excluir/Experiencia_Excluir.php&acao=excluir&id=<?php echo $row['IdExperiencia'];?>">Excluir</a>
            </td>
          </tr>
          <?php }}
           ?>
    </table>
  </div>
</div>