<?php include "../config.php";

#if($_GET('Id' == null)){
 # echo '<meta http-equiv = "refresh" content = "2; url = ./index.php?page=notfound" />';
 # }

if (@$_POST['botao']) {
 
  $IdCliente = $_GET['id'];
  $Telefone = $_POST['Telefone'];
  $Contato = $_POST['Contato'];

  if ($Telefone != '' && $Contato != '') {

    $sql = "INSERT INTO contato (FkIdClienteInContato, telefone, NomeContato) 
    VALUES ( '$IdCliente', '$Telefone', '$Contato')";
    echo $sql;
    $conn = Conectar();
    $result = $conn->query($sql);

    echo '<meta http-equiv = "refresh" content = "2; url =./index.php"/>';
  }
}
