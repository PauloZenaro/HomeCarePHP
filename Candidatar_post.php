<?php include "./config.php";
    include "./protect.php";
if (@$_POST['botao']) {

  $IdAnuncio = $_POST['idanuncio'];
  $Id = $_SESSION['id'];
 
   if ($IdAnuncio != '' && $Id != '') {
    $conn = Conectar();
     $sql = "INSERT INTO candidato (FkIdAnuncioInCandidato, FkIdClienteInCandidato) 
    VALUES ( '$IdAnuncio', '$Id')";
    $result = $conn->query($sql);
    echo '<meta http-equiv = "refresh" content = "0; url =./index.php?page=sucessocandidato.php"/>';

  }
}
