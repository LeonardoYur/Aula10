<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form class="row gy-2 gx-3 align-items-center">
            <div class="col-lg">
                <select class="form-select" id="autoSizingSelect">
                    <?php
                    include("conexao.php");
                    $comandoSQL = 'SELECT  id, nome FROM tblTurmas';
                    $comando = $conexao->prepare($comandoSQL);
                    $resultado = $comando->execute();
                    if ($resultado) {
                        echo 'Mostrando Resultado: <br>';
                        while ($linha = $comando->fetch()) {
                            ?>
                            <option value="<?php echo $linha['id']; ?>"><?php echo $linha['nome'] ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Aluno</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <?php
        include("conexao.php");
        $comandoSQL = 'SELECT  id, nome, idTurma FROM tblAlunos';
        $comando = $conexao->prepare($comandoSQL);
        $resultado = $comando->execute();
        if ($resultado) {
            while ($linha = $comando->fetch()) {
                ?>
            <tr>
                            <th scope='row'><?php echo $linha['id'] ?></th>
                            <td><?php echo $linha['nome'] . " "; ?></td>
                            <td><?php $comandoSQL2 = "SELECT  id, nome FROM tblTurmas where id = {$linha["idTurma"]}";
                            $comando2 = $conexao->prepare($comandoSQL2);
                            $resultado2 = $comando2->execute(); 
                            
                            while ($row = $comando2->fetch(PDO::FETCH_ASSOC)) {
                                echo $row['nome'];
                            }
                                ?></td>
                            <td class="d-flex gap-1"><a href='excluir.php?id=$id' class='btn btn-danger'>Apagar</a><a
                                    href='formulario_update_novo.php?id=$id' class='btn btn-primary'>Editar</a></td>
                        </tr>
                    </tbody>
                <?php
            }
        }
        ?>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>