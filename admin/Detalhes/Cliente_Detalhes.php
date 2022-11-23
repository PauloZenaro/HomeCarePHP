<h1>Detalhes Cliente</h1>

<?php 
include "../config.php";
$Id = $_GET['id'];
$conn = Conectar();

$query = "SELECT * FROM Cliente where Id = $Id
";


$result = $conn->query($query);

if ($result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {      

?>

<form method="post" enctype="multipart/form-data" target="">
    
<div class="row">
    <div class="col-2"><h2>Foto Atual:</h2></div>    
    <div class="col-10"><img src="../Fotos/<?php echo $row['Foto'];?>" alt='Foto Perfil' width="120" height="120"></div>
</div>
<br>
    <div>
        <label>Id:</label>
        <input type="text" name="Id" size="50" Value ="<?php echo $row['Id'];?>" readonly/>
    </div>
    <br />
    <div>
        <label>Nome:</label>
        <input type="text" name="Nome" size="50" Value ="<?php echo $row['Nome'];?>" readonly/>
    </div>
    <br />
    <div>
        <label>Login:</label>
        <input type="text" name="LoginUsuario" size="30" Value ="<?php echo $row['LoginUsuario'];?>" readonly/>
    </div>
    <br />
    <div>
        <label>Senha:</label>
        <input type="password" name="Senha" size="50" Value ="<?php echo $row['senha'];?>" readonly/>
    </div>
    <br />
    <div>
        <label>Data De Nascimento:</label>
        <input type="date" name="DataDeNascimentoUsuario" Value ="<?php echo $row['DataDeNascimentoUsuario']?>" readonly/>
    </div>
    <br />
    <div>
        <label>CPF:</label>
        <input type="text" name="Cpf" size="15" Value ="<?php echo $row['Cpf']?>" readonly/>
    </div>
    <br />
    <div>
        <label>Rg:</label>
        <input type="text" name="Rg" size="15" Value ="<?php echo $row['Rg']?>" readonly/>
    </div>
    <br />
    <div>
        <label>email:</label>
        <input type="text" name="email" Value ="<?php echo $row['email']?>" readonly/>
    </div>
    <br />
</form>

<?php } } ?>