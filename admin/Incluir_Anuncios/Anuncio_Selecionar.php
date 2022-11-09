<?php include "Anuncio_Incluir_post.php";

$Data = date('d/m/Y');

$SqlRequest = "SELECT * from cliente
order by Id";

$conn = Conectar();

$result = $conn->query($SqlRequest);

?>
<h1>Inclusão de Anuncio</h1>

<form method="GET" action="/admin/index.php?page=Incluir_Anuncios/Anuncios_Incluir.php" enctype="multipart/form-data" target="/admin/index.php?page=Incluir_Anuncios/Anuncios_Incluir.php">
    <div>
    <label for="id">Id Criador:</label>
            <select id="id" name="id">

            <?php if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {?>
                        <option value="<?php echo $row['Id'];?>"><?php echo $row['Id'];?></option>
                        <?php
            }
            }
            ?>
    </div>
    <br>
    <div class="button">
            <input type="submit" value="Submit">
    </div>
</form>
