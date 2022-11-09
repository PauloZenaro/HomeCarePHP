<h1>Alterar Cliente</h1>

<?php include "./Cliente_Alterar_post.php"; 
$Id = $_GET['id'];
$conn = Conectar();

$query = "SELECT * FROM Cliente where Id = $Id
";


$result = $conn->query($query);

if ($result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {      

?>
<form method="post" enctype="multipart/form-data" target="Cliente_Alterar_post.php">
    <div>
        <label>Id:</label>
        <input type="text" name="Id" size="50" Value ="<?php echo $row['Id']?>" readonly/>
    </div>
    <br />
    <div>
        <label>Nome:</label>
        <input type="text" name="Nome" size="50" Value ="<?php echo $row['Nome']?>"/>
    </div>
    <br />
    <div>
        <label>Login:</label>
        <input type="text" name="LoginUsuario" size="30" Value ="<?php echo $row['LoginUsuario']?>" />
    </div>
    <br />
    <div>
        <label>Senha:</label>
        <input type="password" name="Senha" size="50" Value ="<?php echo $row['senha']?>"/>
    </div>
    <br />
    <div>
        <label>Data De Nascimento:</label>
        <input type="date" name="DataDeNascimentoUsuario" Value ="<?php echo $row['DataDeNascimentoUsuario']?>"/>
    </div>
    <br />
    <div>
        <label>CPF:</label>
        <input type="text" name="Cpf" size="15" Value ="<?php echo $row['Cpf']?>" />
    </div>
    <br />
    <div>
        <label>Rg:</label>
        <input type="text" name="Rg" size="15" Value ="<?php echo $row['Rg']?>"/>
    </div>
    <br />
    <div>
        <label>email:</label>
        <input type="text" name="email" Value ="<?php echo $row['email']?>" />
    </div>
    <br />

    <div>
        <input type="submit" name="botao" value="submit" />
    </div>
</form>

<?php } } ?>