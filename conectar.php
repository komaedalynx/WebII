
 <?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "aluno";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  $nome = $_POST['nome'];
  $nascimento = $_POST['nascimento'];
  $renda = $_POST['renda'];

  $sql = "INSERT INTO ALUNO (nome, nascimento, renda) VALUES ('$nome', '$nascimento', $renda)";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  header("location: aluno.php");
}


?> 