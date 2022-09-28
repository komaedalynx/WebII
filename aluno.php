<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "aluno";

$conn = new mysqli($servername, $username, $password, $dbname);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar aluno</title>
</head>
<body>
    <h1>cadastrar aluno</h1>
    <form action="conectar.php" method="post">
        <label for="nome">Insira seu nome:</label><br><br>
        <input type="text" id="nome" name="nome" placeholder="Jacinto Pinto do Rego" required><br><br>
        <label for="renda">Insira sua renda:</label> <br><br>
        <input type="decimal" id="renda" name="renda" placeholder="100" required><br><br> 
        <label for="nascimento">Insira sua data de nascimento:</label><br><br>
        <input type="date" id="nascimento" name="nascimento" required><br><br> 
        <input type="submit" id="enviar" value="enviar">
        
    </form>
    <?php
    $sql = "SELECT * FROM ALUNO";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "nome: " . $row["nome"]. " - renda: " . $row["renda"]. " - nascimento: " . $row["nascimento"]. "<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    ?>
</body>
</html>