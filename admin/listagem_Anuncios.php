<!-- marcas -->
<?php include "config.php";

$IdCliente = $_GET['id'];
$ClienteNome = $_GET['nome'];
?>

<h1>Anuncios de <?php echo $ClienteNome;?></h1>
<div class="container px-4 px-lg-5 mt-5">
  <div class="row">
    <a href="./index.php?page=incluir/Anuncio_incluir.php&id=<?php echo $IdCliente?>&nome=<?php echo $ClienteNome;?>">Incluir Anuncio</a>
    <table class="table table-striped">
      <thead class="thead-dark">
        <td>Código</td>
        <td>Data de Criação</td>
        <td>Data Do Serviço</td>
        <td>Descrição</td>

      </thead>
      <?php
     
      if (@$_GET['acao'] == 'excluir') {

      }

      $conn = Conectar();

      $query = "SELECT * FROM anuncios where FkIdClienteCriadorInAnuncios = $IdCliente
      
      order by FkIdClienteCriadorInAnuncios";
     

      $result = $conn->query($query);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {      
      ?>
          <tr>
            <td><?php echo $row['IdAnuncio']; ?></td>
            <td><?php echo $row['DataDeCriacao']; ?></td>
            <td><?php echo $row['DataServico']; ?></td>
            <td><?php echo $row['DescricaoAnuncio'];?></td>
            <td>
              <a href="./index.php?page=excluir/Anuncio_Excluir.php&acao=Alterar&id=<?php echo $row['IdAnuncio'];?>">Alterar</a>
              <a href="./index.php?page=excluir/Anuncio_Excluir.php&acao=excluir&id=<?php echo $row['IdAnuncio'];?>">Excluir</a>
            </td>
          </tr>
          <?php }}
           ?>
    </table>
  </div>
</div>