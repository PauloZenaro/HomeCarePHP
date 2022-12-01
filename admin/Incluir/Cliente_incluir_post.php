<?php include "../config.php";

if (@$_POST['botao']) {
       $Nome = $_POST['Nome'];
       $LoginUsuario = $_POST['LoginUsuario'];
       $Data = $_POST['DataDeNascimentoUsuario'];
       $Cpf = $_POST['Cpf'];
       $Rg = $_POST['Rg'];
       $email = $_POST['email'];
       $senha = $_POST['Senha'];
       $Foto = $_FILES['Foto'];

  if ($Nome != '' && $Data != '' && $Cpf != '') {

    $date = new DateTime();

    $imagem = $date->getTimestamp()."_". $Cpf. ".jpg";

    $sql = "INSERT INTO cliente (Nome, LoginUsuario, DataDeNascimentoUsuario, cpf, Rg, email, senha, Foto) 
    VALUES ( '$Nome', '$LoginUsuario', '$Data', '$Cpf', '$Rg', '$email', '$senha', '$imagem')";
    #echo $sql;

     $uploaddir = '../Fotos/';
     $uploadfile = $uploaddir . $imagem;

      echo $uploadfile;

      echo '<pre>';
      
      if (move_uploaded_file($_FILES['Foto']['tmp_name'], $uploadfile)) {
          echo "Arquivo válido e enviado com sucesso.\n";
          $conn = Conectar();
          $result = $conn->query($sql);
          echo '<meta http-equiv = "refresh" content = "0; url = ./sucesso.php" />';
      } 
      else {
          echo "Possível ataque de upload de arquivo!\n";
          echo '<meta http-equiv = "refresh" content = "2; url = ../index.php" />';
      }

   #   $conn = Conectar();
   #  $result = $conn->query($sql);
      #echo '<meta http-equiv = "refresh" content = "2; url = ./index.php" />';
  }
}
?>