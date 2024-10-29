<?php
if ($_GET["valor"] == "" || $_GET["valor"] < 0 || $_GET["valor"] > 10) {
    header("location: formularioNota.php");
}
if ($_GET["valor"] == "" || $_GET["valor"] < 0 || $_GET["valor"] > 10) {
    header("location: formularioNota.php");
}
include("conexao.php");

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_GET['valor'];
echo "<br>";


$verificaSQL = "SELECT COUNT(*) as qtd FROM tblAlunos WHERE id = :ida AND idTurma = :id";


try {
    $verifica = $conexao->prepare($verificaSQL);
    $verifica->execute(array('ida' => $_GET['ida'], 'id' => $_GET['id']));
    $linha = $verifica->fetch();

    if ($linha['qtd'] > 0) {
        $codigoSQL = "INSERT INTO tblNotas (id, valor, idAluno, idTurma) VALUES (NULL, :va, :ida, :id)";
        $comando = $conexao->prepare($codigoSQL);
        $resultado = $comando->execute(array('va' => $_GET['valor'], 'ida' => $_GET['ida'], 'id' => $_GET['id']));

        if ($resultado) {
            echo "Nota inserida com sucesso!<br>";
        } else {
            echo "Erro ao inserir a nota!<br>";
        }
    } else {
        echo "Erro: O aluno não pertence à turma especificada.<br>";
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
$conexao = null;
?>