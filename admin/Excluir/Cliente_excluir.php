<?php
include '../config.php';
$excluir = @$_GET['acao'];
$id = @$_GET['id'];

if ($excluir == "excluir" && $id != "") {
    $conn = Conectar();
    $query = 'SELECT * from cliente where id=' . $id;
    $result = $conn->query($query);
    #echo $query;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){     
            $Foto = $row['Foto'];
        }
        if ($Foto != '' && file_exists('../../Fotos/' . $Foto)) {
            unlink('../../Fotos/' . $Foto);
        }
        else
          echo "foto não existe";

        
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
        echo '<meta http-equiv = "refresh" content = "3; url = ../index.php" />';
    }
}
