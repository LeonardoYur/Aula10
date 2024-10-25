<?php 
$servidor = 'localhost';
$banco = 'dbSistemaNotas';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

?>