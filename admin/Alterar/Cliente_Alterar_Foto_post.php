<?php include "../config.php";

$query = "SELECT * FROM Cliente where Id = $Id";
$conn = Conectar();
$result = $conn->query($query);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {      
        $Cpf = $row['Cpf'];
        $FotoApagar = $row['Foto'];
    }
}
if (@$_POST['botao']) {
     $Foto = $_FILES['Foto'];

  if ($Foto != null) {

    $date = new DateTime();
     $imagem = $date->getTimestamp()."_". $Cpf. ".jpg";

    $sql = "UPDATE `cliente` SET `Foto`='$imagem' WHERE Id = $Id";

     $uploaddir = '../Fotos/';
     $uploadfile = $uploaddir . $imagem;

     # echo $uploadfile;

     # echo '<pre>';
      
      if (move_uploaded_file($_FILES['Foto']['tmp_name'], $uploadfile)) {
          echo "Arquivo válido e enviado com sucesso.\n";

          if (file_exists($uploaddir . $FotoApagar)) {
            unlink($uploaddir . $FotoApagar);
        }

          $conn = Conectar();
          $result = $conn->query($sql);
          echo '<meta http-equiv = "refresh" content = "0; url = ./sucesso.php" />';
      } 
      else {
          echo "Possível ataque de upload de arquivo!\n";
          echo '<meta http-equiv = "refresh" content = "2; url = ./index.php" />';
      }

   #  $conn = Conectar();
   #  $result = $conn->query($sql);
      #echo '<meta http-equiv = "refresh" content = "2; url = ./index.php" />';
  }
}
?>