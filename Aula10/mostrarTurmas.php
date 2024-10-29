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
    <?php include("navbar.php"); ?>
    <div class="container mt-5">

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conexao.php");
                $comandoSQL = "SELECT  id, nome FROM tblTurmas";
                $comando = $conexao->prepare($comandoSQL);
                $resultado = $comando->execute();
                if ($resultado) {
                    while ($linha = $comando->fetch()) {
                        ?>
                        <tr>
                            <th scope='row'><?php echo $linha['id'] ?></th>
                            <td><?php echo $linha['nome'] . " "; ?></td>
                            <td class="d-flex gap-1"><a href='excluir.php?id=$id' class='btn btn-danger'>Apagar</a><a
                                    href='formulario_update_novo.php?id=$id' class='btn btn-primary'>Editar</a></td>
                            </td>
                        </tr>
                        <?php
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>