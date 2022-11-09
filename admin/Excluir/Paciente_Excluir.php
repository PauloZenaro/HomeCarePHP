<?php
include '../config.php';
$excluir = @$_GET['acao'];
$IdPaciente = @$_GET['id'];

if ($excluir == "excluir" && $IdPaciente != "") {
    $conn = Conectar();
    $query = 'SELECT * from paciente where IdPaciente=' . $IdPaciente;
    $result = $conn->query($query);
    echo $query;
    if ($result->num_rows > 0) 
    {
        $sql = "DELETE FROM paciente WHERE IdPaciente=" . $IdPaciente;
        $result = $conn->query($sql);
            if (!$result) 
            {
                die('Invalid query !');
            } 
    else 
        {
         echo 'Item excluído com sucesso !';
         echo '<meta http-equiv = "refresh" content = "2; url = ./index.php" />';
         }
    }
    else 
    {
        echo 'código para exclusão inválido !';
    }
}
