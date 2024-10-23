<?php
if ($_POST["nome"] == "") {
    header("location: formularioTurmas.php");
}
include("conexao.php");

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_POST['nome'];
echo "<br>";

$codigoSQL = "INSERT INTO tblTurmas (id, nome) VALUES (NULL, :nm)";

try {
    $comando = $conexao->prepare($codigoSQL);
    $resultado = $comando->execute(array('nm' => $_POST['nome']));

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