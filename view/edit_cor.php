<?php
require_once("mysqli_conexao.php");

$id = $_GET['id_cor'];

$result = mysqli_query($conn, "SELECT * FROM cor WHERE id_cor=$id");
$resultData = mysqli_fetch_assoc($result);

$desc = $resultData['desc_cor'];
?>
<html>
    <head>
        <title>Editando cor</title>
    </head>
    <body>
        <h2>Editando Cor</h2>
        <p>
            <a href="read_cor.php">Voltar para lista de cores</a>
        </p>

        <form name"edit" method="post" action="update_cor.php">
          <p>Descricao</p>  
          <input type="text" name="desc_cor" value=<?php echo $desc; ?>>
          <input type="hidden" name="id_cor" value=<?php echo $id ?>>
          <input type="submit" name="update" value="Atualizar">
        </form>
    </body>
</html>

