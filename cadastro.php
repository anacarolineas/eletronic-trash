<?php
$dsn = "mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_20ed495dcb55965";
$username = "ba9bd6840dc099";
$password = "15789e4f";

$pdo = new PDO($dsn, $username, $password);
$pdo->exec("set names utf8");

// Check connection
if (!$pdo) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$nome = $_POST['nome'];
$email = $_POST['nome'];
$telefone = $_POST['nome'];
$site = $_POST['nome'];
$coleta = $_POST['nome'];
$estado = $_POST['nome'];
$cidade = $_POST['nome'];
$latitude = $_POST['nome'];
$longitude = $_POST['nome'];
$descricao = $_POST['nome'];
$logo = $_POST['nome'];

$sql = "INSERT INTO te_empresas (name, lastname, email) VALUES ('Thom', 'Vial', 'thom.v@some.com')";

if (mysqli_query($pdo, $sql)) {
    echo "<script>alert('Cadastro enviado com sucesso! </br> Em breve sua empresa estará disponível em nosso site.');</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($pdo);
}
mysqli_close($pdo);

?>