<?php include "../config.php";

#if($_GET('Id' == null)){
 # echo '<meta http-equiv = "refresh" content = "2; url = ./index.php?page=notfound" />';
 # }

if (@$_POST['botao']) {
 
  $IdCliente = $_GET['id'];
  $Instituicao = $_POST['Instituicao'];
  $Formacao = $_POST['Formacao'];


  if ($Formacao != '' && $Instituicao != '') {

    $sql = "INSERT INTO formacao (FkIdClienteInFormacao, Instituicao, Formacao) 
    VALUES ( '$IdCliente', '$Instituicao', '$Formacao')";
    echo $sql;
    $conn = Conectar();
    $result = $conn->query($sql);

    echo '<meta http-equiv = "refresh" content = "2; url =./index.php"/>';
  }
}
