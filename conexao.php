<?php
    $link = mysqli_connect("Mysql@us-codbr-east-06.cleardb.net:3306", "ba9bd6840dc099", "15789e4f", "heroku_20ed495dcb55965");
 
    if (!$link) {
        echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
     
    echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
     
    mysqli_close($link);
    ?>