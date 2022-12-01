<?php include "./config.php";

if (@$_POST['botao']) {
  $Id = $_POST['IdPaciente'];
  $Nome = $_POST['NomePaciente'];
  $Data = $_POST['DataDeNascimentoPaciente'];

  if ($Nome != '' && $Data != '') {

  
    $sql = "UPDATE paciente SET `NomePaciente`='$Nome',
                                `DataDeNascimentoPaciente`='$Data'
                                WHERE IdPaciente  = $Id ";
   # echo $sql;
    $conn = Conectar();
    $result = $conn->query($sql);
    echo '<meta http-equiv = "refresh" content = "0; url = ./sucesso.php" />';
  }
}
