<?php
include '../config.php';
$excluir = @$_GET['acao'];
$IdAnuncio = @$_GET['id'];

if ($excluir == "excluir" && $IdAnuncio != "") {
    $conn = Conectar();
    $query = 'SELECT * from anuncios where IdAnuncio =' . $IdAnuncio;
    $result = $conn->query($query);
    echo $query;
    if ($result->num_rows > 0) 
    {
        $sql = "DELETE FROM anuncios WHERE IdAnuncio=" . $IdAnuncio;
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
