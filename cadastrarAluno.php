<?php
if ($_GET['nome'] == "") {
    header("location: formularioAluno.php");
}
include("conexao.php");

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_GET['nome'];
echo "<br>";

$codigoSQL = "INSERT INTO tblAlunos (id, nome, idTurma) VALUES (NULL, :nm, :id)";

try {
    $comando = $conexao->prepare($codigoSQL);
    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'id' => $_GET['id']));

    if($resultado) {
	echo "Comando executado!<br>";
    } else {
	echo "Erro ao executar o comando!<br>";
    }
} catch (Exception $e) {
    echo "Erro $e";
}
$conexao = null;
?>