<?php include "../config.php";

if (@$_POST['botao']) {
  $Nome = $_POST['Nome'];
  $LoginUsuario = $_POST['LoginUsuario'];
  $Data = $_POST['DataDeNascimentoUsuario'];
  $Cpf = $_POST['Cpf'];
  $Rg = $_POST['Rg'];
  $email = $_POST['email'];
  $senha = $_POST['Senha'];

  if ($Nome != '' && $Data != '' && $Cpf != '') {

    #  $imagem = $date->getTimestamp()."_". $tipo. ".jpg";
    $sql = "INSERT INTO cliente (Nome, LoginUsuario, DataDeNascimentoUsuario, cpf, Rg, email, senha) 
      VALUES ( '$Nome', '$LoginUsuario', '$Data', '$Cpf', '$Rg', '$email', '$senha')";
   # echo $sql;

    # $uploaddir = '../imagens/produtos/';
    #$uploadfile = $uploaddir . $imagem;

    #echo '<pre>';
    /*if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)) {
          echo "Arquivo válido e enviado com sucesso.\n";
          echo '<meta http-equiv = "refresh" content = "2; url = ./index.php" />';
      } else {
          echo "Possível ataque de upload de arquivo!\n";
          
      }*/

    $conn = Conectar();
    $result = $conn->query($sql);
    echo '<meta http-equiv = "refresh" content = "2; url = ./index.php" />';
  }
}
