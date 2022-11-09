<?php
include '../config.php';
$excluir = @$_GET['acao'];
$IdPaciente = @$_GET['id'];

if ($excluir == "excluir" && $IdPaciente != "") {
    $conn = Conectar();
    $query = 'SELECT * from experiencia where IdExperiencia=' . $IdPaciente;
    $result = $conn->query($query);
    echo $query;
    if ($result->num_rows > 0) 
    {
        $sql = "DELETE FROM experiencia WHERE IdExperiencia=" . $IdPaciente;
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
