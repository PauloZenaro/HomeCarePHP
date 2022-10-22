<!-- marcas -->
<?php include "../config.php"; ?>

<h1>Clientes</h1>
<div class="container px-4 px-lg-5 mt-5">
  <div class="row">
    <a href="index.php?page=incluir/Cliente_incluir.php">Incluir+</a>
    <table class="table table-striped">
      <thead class="thead-dark">
        <td>Código</td>
        <td>Nome</td>

      </thead>
      <?php
     
      if (@$_GET['acao'] == 'excluir') {

      }

      $conn = Conectar();

      $query = "SELECT id, nome FROM cliente
      
      order by id";
     

      $result = $conn->query($query);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {      
      ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nome']; ?></td>
            <td>
              <a href="Excluir/cliente_excluir.php?acao=excluir&id=<?php echo $row['id']; ?>">Excluir</a>
            </td>
          </tr>
          <?php }}
           ?>
    </table>
  </div>
</div>