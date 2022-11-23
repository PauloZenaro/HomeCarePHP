<?php include "../config.php"; ?>

<h1>Anuncios</h1>
<div class="container px-4 px-lg-5 mt-5">
  <div class="row">
    <a href="index.php?page=Incluir_Anuncios/Anuncio_Selecionar.php">Incluir+</a>
    <table class="table table-striped">
      <thead class="thead-dark">
        <td>Código Anuncio</td>
        <td>Código Criador</td>

      </thead>
      <?php
     
      if (@$_GET['acao'] == 'excluir') {

      }

      $conn = Conectar();

      $query = "SELECT IdAnuncio, FkIdClienteCriadorInAnuncios FROM Anuncios
      
      order by IdAnuncio";
     

      $result = $conn->query($query);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {      
      ?>
          <tr>
            <td><?php echo $row['IdAnuncio']; ?></td>
            <td><?php echo $row['FkIdClienteCriadorInAnuncios']; ?></td>
       <!--     <td>
              <a href="./index.php?page=Anuncios_Descricao.php&id=<?php echo $row['IdAnuncio'];?>">Descrição</a>
            </td>
            <td>
              <a href="./index.php?page=listagem_Candidatos.php&id=<?php echo $row['IdAnuncio'];?>">Candidatos</a>
            </td>
            <td>
              <a href="Alterar/Anuncio_Alterar.php?page=Alterar_Anuncio&id=<?php echo $row['IdAnuncio']; ?>">Detalhes</a>
              <a href="Alterar/Anuncio_Alterar.php?page=Alterar_Anuncio&id=<?php echo $row['IdAnuncio']; ?>">Alterar</a>
              <a href="Excluir/Anuncio_excluir.php?acao=excluir&id=<?php echo $row['IdAnuncio']; ?>">Excluir</a>
            </td>-->
          </tr>
          <?php }}
           ?>
    </table>
  </div>
</div>