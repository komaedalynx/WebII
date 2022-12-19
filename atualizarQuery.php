<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "aluno";

$id = $_POST["id"];
$nome = $_POST["nome"];
$nasc = $_POST["nascimento"];
$renda = $_POST["renda"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE aluno SET nome='$nome', nasc='$nasc', renda=$renda WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
header("location: aluno.php");
?>