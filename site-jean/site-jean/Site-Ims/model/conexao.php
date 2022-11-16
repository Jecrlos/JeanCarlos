<?php
define('host', 'localhost');
define('usuario', 'root');
define('senha', '');
define('dbname', 'livraria_jean');
$conexao = mysqli_connect(host, usuario, senha, dbname) or die ('não doi possivel conecta bobao');
mysqli_set_charset($conexao, "utf8");
?>