<?php
include_once('conexao.php');

$id = $_GET['codigo'];

$sql_consulta = mysqli_query($ligar, "SELECT * FROM tb_usuarios WHERE id = '$id'");

// Organizar tabela
$dados = mysqli_fetch_array($sql_consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIÇÃO</title>
    <link rel="stylesheet" href="css/bulma.min.css">
</head>

<body>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <h1 class="title has-text-centered">Edição dos Dados</h1>
                    <hr>
                    <form action="atualizar.php" method="POST">
                        <input type="hidden" name="codigo" value='<?= $dados[0] ?>'>
                        <div class="field">
                            <label class="label">Usuário</label>
                            <div class="control">
                                <input type="text" name="usuario" class="input" value='<?= $dados[1] ?>'>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input type="email" name="email" class="input" value='<?= $dados[2] ?>'>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Senha</label>
                            <div class="control">
                                <input type="password" name="senha" class="input" value='<?= $dados[3] ?>'>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Nivel</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select name="nivel">
                                        <option value='<?= $dados[4] ?>'> <?= $dados[4] ?></option>
                                        <option>Assistente</option>
                                        <option>Estagiário</option>
                                        <option>Técnico</option>
                                        <option>Outro</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="field is-grouped columns is-centered">
                            <div class="control">
                                <button class="button is-link is-medium">Atualizar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>