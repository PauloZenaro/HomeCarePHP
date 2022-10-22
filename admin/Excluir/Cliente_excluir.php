<?php
include '../../config.php';
$excluir = @$_GET['acao'];
$id = @$_GET['id'];

if ($excluir == "excluir" && $id != "") {
    $conn = Conectar();
    $query = 'SELECT * from cliente where id=' . $id;
    $result = $conn->query($query);
    echo $query;
    if ($result->num_rows > 0) 
    {
        $sql = "DELETE FROM cliente WHERE id=" . $id;
        $result = $conn->query($sql);
            if (!$result) 
            {
                die('Invalid query !');
            } 
    else 
        {
         echo 'Item excluído com sucesso !';
         echo '<meta http-equiv = "refresh" content = "2; url = ../index.php" />';
         }
    }
    else 
    {
        echo 'código para exclusão inválido !';
    }
}
