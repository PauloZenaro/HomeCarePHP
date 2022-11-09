<!-- marcas -->
<?php include "config.php";

$IdCliente = $_GET['id'];
$ClienteNome = $_GET['nome'];
?>

<h1>Contatos de <?php echo $ClienteNome;?></h1>
<div class="container px-4 px-lg-5 mt-5">
  <div class="row">
    <a href="./index.php?page=incluir/Contato_incluir.php&id=<?php echo $IdCliente;?>">Incluir Contato</a>
    <table class="table table-striped">
      <thead class="thead-dark">
        <td>Código</td>
        <td>Telefone</td>
        <td>Contato</td>

      </thead>
      <?php
     
      if (@$_GET['acao'] == 'excluir') {

      }

      $conn = Conectar();

      $query = "SELECT * FROM contato where FkIdClienteInContato = $IdCliente
      
      order by FkIdClienteInContato";
     

      $result = $conn->query($query);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {      
      ?>
          <tr>
            <td><?php echo $row['IdContato']; ?></td>
            <td><?php echo $row['telefone']; ?></td>
            <td><?php echo $row['NomeContato'];?></td>
            <td>
              <a href="./index.php?page=excluir/Contato_Excluir.php&acao=Alterar&id=<?php echo $row['IdContato'];?>">Alterar</a>
              <a href="./index.php?page=excluir/Contato_Excluir.php&acao=excluir&id=<?php echo $row['IdContato'];?>">Excluir</a>
            </td>
          </tr>
          <?php }}
           ?>
    </table>
  </div>
</div>