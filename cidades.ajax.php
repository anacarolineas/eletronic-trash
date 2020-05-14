<?php
header( 'Cache-Control: no-cache' );
header( 'Content-type: application/xml; charset="utf-8"', true );

$link = new mysqli("us-cdbr-east-06.cleardb.net", "ba9bd6840dc099", "15789e4f", "heroku_20ed495dcb55965");

$cod_estados = mysqli_real_escape_string($link, $_GET['id_estado'] );

$cidades = array();

$sql = "SELECT id_cidade, nome
    FROM te_cidades
    WHERE estado = $cod_estados
    ORDER BY nome";
$res = mysqli_query($link, $sql);
while ( $row = mysqli_fetch_assoc( $res ) ) {
  $cidades[] = array(
    'cod_cidade'  => $row['id_cidade'],
    'nome'      => $row['nome'],
  );
}

echo( json_encode( $cidades ) );