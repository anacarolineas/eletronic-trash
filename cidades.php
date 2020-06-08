<?php

$dsn = "mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_20ed495dcb55965";
$username = "ba9bd6840dc099";
$password = "15789e4f";

$pdo = new PDO($dsn, $username, $password);
$pdo->exec("set names utf8");

$sql = $pdo->prepare("select * from te_cidades where estado = '".$_POST['id']."'");
$sql->execute();

$fetchBusca = $sql->fetchAll();

foreach($fetchBusca as $cidades) {
  echo '<option value='.$cidades['id_cidade'].'>'.$cidades['nome'].'</option>';

  
}