<?php include "../config.php";

#if($_GET('Id' == null)){
 # echo '<meta http-equiv = "refresh" content = "2; url = ./index.php?page=notfound" />';
 # }

if (@$_POST['botao']) {
 
  $IdCliente = $_GET['id'];
  $IdPaciente = $_POST['FkIdPacienteInAnuncios'];
  $Data = date('Y/m/d');
  $Descricao = $_POST['DescricaoAnuncio'];
  $DataServico = $_POST['DataServico'];
   $Aberto = True;

  if ($IdCliente != '' && $IdPaciente != '') {

    $sql = "INSERT INTO anuncios (FkIdClienteCriadorInAnuncios, DataDeCriacao, DataServico, Aberto, DescricaoAnuncio, FkIdPacienteInAnuncios) 
    VALUES ( '$IdCliente', '$Data', '$DataServico(Y/m/d);', '$Aberto', '$Descricao', $IdPaciente)";
    
    
    echo $sql;
    $conn = Conectar();
    $result = $conn->query($sql);

    echo '<meta http-equiv = "refresh" content = "0; url = ./sucesso.php" />';
  }
}
