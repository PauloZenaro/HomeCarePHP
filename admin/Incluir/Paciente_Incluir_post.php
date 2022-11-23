<?php include "../config.php";

if (@$_POST['botao']) {
  $NomePaciente = $_POST['NomePaciente'];
  $IdCliente = $_GET['id'];
  $Data = $_POST['DataDeNascimentoPaciente'];

  if ($NomePaciente != '' && $Data != '' && $IdCliente != '') {


    $sql = "INSERT INTO paciente (FkIdClienteInPaciente, NomePaciente, DataDeNascimentoPaciente) 
      VALUES ( '$IdCliente', '$NomePaciente', '$Data')";
    echo $sql;
    $conn = Conectar();
    $result = $conn->query($sql);
    echo '<meta http-equiv = "refresh" content = "2; url = ./index.php" />';
  }
}
