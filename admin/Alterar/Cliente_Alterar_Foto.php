<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <script src="js/scripts.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<?php
$Id = $_GET['id'];
$Nome = $_GET['nome'];
include "Alterar/Cliente_Alterar_Foto_post.php"; 
$conn = Conectar();

$query = "SELECT * FROM Cliente where Id = $Id
";

$result = $conn->query($query);
?>

<h1>Alterar Foto de <?php echo $Nome;?></h1>
<?php
if ($result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {      

?>
<div class="row">
    <div class="col-2"><h2>Foto Atual:</h2></div>    
    <div class="col-10"><img src="../Fotos/<?php echo $row['Foto'];?>" alt='Foto Perfil' width="120" height="120"></div>
</div>
<br>
<form method="post" enctype="multipart/form-data" target="Alterar/Cliente_Alterar_Foto_post.php">
    
<div>
        <label>Id</label>
        <input type="text" name="Id" Value ="<?php echo $Id?>" readonly/>
    </div>
<br>
    <div>
        <label>Foto de perfil:</label>
        <input type="file" name="Foto" required/>
    </div>
    <br>
    <div>
        <input type="submit" name="botao" value="submit"/>
    </div>
</form>

<?php } } ?>

