<?php
if ($_POST["valor"] == "" || $_POST["valor"] < 0 || $_POST["valor"] > 10) {
    header("location: formularioNota.php");
}
include("conexao.php");

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_POST['nota'];
echo "<br>";

$codigoSQL = "INSERT INTO tblNotas (id, valor, idAluno, idTurma) VALUES (NULL, :va, :ida, :id)";

try {
    $comando = $conexao->prepare($codigoSQL);
    $resultado = $comando->execute(array('va' => $_POST['nota'], 'ida' => $_POST['ida'], 'id' => $_POST['id']));

    if ($resultado) {
        echo "Comando executado!<br>";
    } else {
        echo "Erro ao executar o comando!<br>";
    }
} catch (Exception $e) {
    echo "Erro $e";
}
$conexao = null;
?>