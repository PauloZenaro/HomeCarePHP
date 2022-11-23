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
        <td>Foto</td>

      </thead>
      <?php
     
      if (@$_GET['acao'] == 'excluir') {

      }

      $conn = Conectar();

      $query = "SELECT id, nome, Foto FROM cliente
      
      order by id";
     

      $result = $conn->query($query);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {      
      ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nome']; ?></td>
            <td><img src="../Fotos/<?php echo $row['Foto'];?>" alt='Foto Perfil' width="48"></td>
            <td>
              <a href="./index.php?page=listagem_Anuncios.php&id=<?php echo $row['id'];?>&nome=<?php echo $row['nome'];?>">Anuncios</a>
            </td>
            <td>
              <a href="./index.php?page=listagem_pacientes.php&id=<?php echo $row['id'];?>&nome=<?php echo $row['nome'];?>">Pacientes</a>
            </td>
            <td>
              <a href="./index.php?page=listagem_contatos.php&id=<?php echo $row['id'];?>&nome=<?php echo $row['nome'];?>">Contatos</a>
            </td>
            <td>
              <a href="./index.php?page=listagem_Experiencias.php&id=<?php echo $row['id'];?>&nome=<?php echo $row['nome'];?>">Experiencias</a>
            </td>
            <td>
              <a href="./index.php?page=listagem_Formacoes.php&id=<?php echo $row['id'];?>&nome=<?php echo $row['nome'];?>">Formações</a>
            </td>
            <td>
              <a href="index.php?page=Alterar/Cliente_Alterar_Foto.php&id=<?php echo $row['id'];?>&nome=<?php echo $row['nome'];?>">Mudar Foto</a>
            </td>
            <td>
              <a href="index.php?page=Detalhes/Cliente_Detalhes.php&id=<?php echo $row['id'];?>">Detalhes</a>
              <a href="index.php?page=Alterar/cliente_Alterar.php&id=<?php echo $row['id']; ?>">Alterar</a>
              <a href="Excluir/cliente_excluir.php?acao=excluir&id=<?php echo $row['id']; ?>">Excluir</a>
            </td>
          </tr>
          <?php }}
           ?>
    </table>
  </div>
</div>