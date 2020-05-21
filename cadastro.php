<?php

include "conexao.php";

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$site = $_POST['site'];
$coleta = $_POST['coleta'];
$estado = $_POST['estadoCad'];
$cidade = $_POST['cidadeCad'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$descricao = $_POST['descricao'];
$logo = $_POST['logo'];

$sql = "INSERT INTO te_empresas (nome, email, telefone, site, realiza_coleta, estado, cidade, latitude, longitude, descricao, 
link_logo, disponivel) VALUES ('$nome', '$email', '$telefone', '$site', '$coleta', '$estado', '$cidade', '$latitude', '$longitude', '$descricao', '$logo', '0')";

if (mysqli_query($link, $sql)) {
    echo "<script>alert('Cadastro enviado com sucesso! Em breve sua empresa estará disponível em nosso site.');</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);

header("refresh:0; url=index.php");
