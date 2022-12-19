<?php
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="atualizarQuery.php" method="post">
            <label for="nome">atualizar nome:</label><br><br>
            <input type="text" id="nome" name="nome" placeholder="Lima Maria" required><br><br>
            <label for="renda">atualizar renda:</label> <br><br>
            <input type="decimal" id="renda" name="renda" placeholder="100" required><br><br> 
            <label for="nascimento">atualizar data de nascimento:</label><br><br>
            <input type="date" id="nascimento" name="nascimento" required><br><br> 
            <label for="">id:</label>
            <input type="text" name="id" id="id" value="<?php echo $id ?>" onkeypress="return false;"><br><br>
            <input type="submit" id="enviar" value="enviar">
    </form>
</body>
</html>


