<?php

echo "<script>alert('ooooo')</script>";

$link = new PDO("us-cdbr-east-06.cleardb.net", "ba9bd6840dc099", "15789e4f", "heroku_20ed495dcb55965");
$link->exec('SET CHARACTER SET utf8');

$pegaCidades = $link->prepare("select * from te_cidades where estado='".$_POST['id']."'");
$pegaCidades->execute();

$fetchAll = $pegaCidades->fetchAll();

foreach ($fetchAll as $cidades) {
    echo '<option>' . $cidades['nome'] . '</option>';
}
