<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php
    include("navbar.php");
    ?>
    <div class="container mt-5">
        <form class="row row-cols-lg-auto g-3 align-items-center" action="cadastrarNota.php">
            <div class="col-12">
                <label class="visually-hidden" for="inlineFormInputGroupUsername">Insira a nota:</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Nota"
                        name="nome">
                </div>
            </div>
            <div class="col-12">
                <select name="id" class="form-select" id="inlineFormSelectPref">
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
            <div class="col-12">
                <select name="id" class="form-select" id="inlineFormSelectPref">
                    <?php
                    include("conexao.php");
                    $comandoSQL = 'SELECT  id, nome FROM tblAlunos';
                    $comando = $conexao->prepare($comandoSQL);
                    $resultado = $comando->execute();
                    if ($resultado) {
                        echo 'Mostrando Resulta do: <br>';
                        while ($linha = $comando->fetch()) {
                            ?>
                            <option value="<?php echo $linha['id']; ?>"><?php echo $linha['nome'] ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    </div>
</body>

</html>