<!-- marcas -->
<?php include "config.php";

$IdCliente = $_GET['id'];
$ClienteNome = $_GET['nome'];
?>

<h1>Formações de <?php echo $ClienteNome;?></h1>
<div class="container px-4 px-lg-5 mt-5">
  <div class="row">
    <a href="./index.php?page=incluir/Formacao_incluir.php&id=<?php echo $IdCliente;?>">Incluir Formação</a>
    <table class="table table-striped">
      <thead class="thead-dark">
        <td>Código</td>
        <td>Instituição</td>
        <td>Formacão</td>
     
      </thead>
      <?php
     
      if (@$_GET['acao'] == 'excluir') {

      }

      $conn = Conectar();

      $query = "SELECT * FROM formacao where FkIdClienteInFormacao = $IdCliente
      
      order by Idformacao";
     

      $result = $conn->query($query);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {      
      ?>
          <tr>
            <td><?php echo $row['Idformacao']; ?></td>
            <td><?php echo $row['Instituicao']; ?></td>
            <td><?php echo $row['Formacao']; ?></td>
            <td>
              <a href="./index.php?page=excluir/Formacao_Excluir.php&acao=Alterar&id=<?php echo $row['Idformacao'];?>">Alterar</a>
              <a href="./index.php?page=excluir/Formacao_Excluir.php&acao=excluir&id=<?php echo $row['Idformacao'];?>">Excluir</a>
            </td>
          </tr>
          <?php }}
           ?>
    </table>
  </div>
</div>