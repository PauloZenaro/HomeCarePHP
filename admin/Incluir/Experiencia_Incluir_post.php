<?php include "../config.php";

#if($_GET('Id' == null)){
 # echo '<meta http-equiv = "refresh" content = "2; url = ./index.php?page=notfound" />';
 # }

if (@$_POST['botao']) {
 
  $IdCliente = $_GET['id'];
  $Experiencia = $_POST['experiencia'];


  if ($Experiencia != '') {

    $sql = "INSERT INTO experiencia (FkIdClienteInExperiencia, Experiencia) 
    VALUES ( '$IdCliente', '$Experiencia')";
    echo $sql;
    $conn = Conectar();
    $result = $conn->query($sql);

    echo '<meta http-equiv = "refresh" content = "2; url =./index.php"/>';
  }
}
