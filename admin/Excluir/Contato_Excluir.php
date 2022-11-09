<?php
include '../config.php';
$excluir = @$_GET['acao'];
$IdContato = @$_GET['id'];

if ($excluir == "excluir" && $IdContato != "") {
    $conn = Conectar();
    $query = 'SELECT * from contato where IdContato=' . $IdContato;
    $result = $conn->query($query);
    echo $query;
    if ($result->num_rows > 0) 
    {

        $sql = "DELETE FROM Contato WHERE IdContato=" . $IdContato;
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
