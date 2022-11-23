<?php include "./config.php";
    include "./protect.php";
if (@$_POST['botao']) {

  $IdAnuncio = $_POST['idanuncio'];
  $Id = $_SESSION['id'];
 
   if ($IdAnuncio != '' && $Id != '') {
    $conn = Conectar();
     $sql = "DELETE FROM candidato WHERE FkIdAnuncioInCandidato = $IdAnuncio and FkIdClienteInCandidato = $Id";
    $result = $conn->query($sql);
    echo '<meta http-equiv = "refresh" content = "0; url =./index.php?page=sucessodesistencia.php"/>';

  }
}
