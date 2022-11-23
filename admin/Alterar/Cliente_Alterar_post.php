<?php include "../config.php";

if (@$_POST['botao']) {
  $Id = $_POST['Id'];
  $Nome = $_POST['Nome'];
  $LoginUsuario = $_POST['LoginUsuario'];
  $Data = $_POST['DataDeNascimentoUsuario'];
  $Cpf = $_POST['Cpf'];
  $Rg = $_POST['Rg'];
  $email = $_POST['email'];
  $senha = $_POST['Senha'];

  if ($Nome != '' && $Data != '' && $Cpf != '') {

  
    $sql = "UPDATE cliente SET Nome='$Nome',
                                `DataDeNascimentoUsuario`='$Data',
                                `Cpf`='$Cpf',
                                `Rg`='$Rg',
                                `email`='$email',
                                `LoginUsuario`='$LoginUsuario',
                                `senha`='$senha'
                                WHERE Id = $Id ";
    echo $sql;
    $conn = Conectar();
    $result = $conn->query($sql);
    echo '<meta http-equiv = "refresh" content = "2; url = ./index.php" />';
  }
}
