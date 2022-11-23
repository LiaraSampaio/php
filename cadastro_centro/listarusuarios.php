<?php

include_once('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="css/bulma.min.css">
</head>

<body style="padding: 40px; font-size: 20px;">
    <center>
        <h1>LISTA DE USUÁRIOS</h1>
        <hr>
        <table rules="all"><br>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USUÁRIO</th>
                    <th>EMAIL</th>
                    <th>SENHA</th>
                    <th>NÍVEL</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql_consulta = mysqli_query($ligar, "SELECT * FROM tb_usuarios ");
                $total = mysqli_num_rows($sql_consulta);

                while ($dados = mysqli_fetch_array($sql_consulta)) {
                ?>
                    <tr>
                        <td><?= $dados[0] ?></td>
                        <td><?= $dados[1] ?></td>
                        <td><?= $dados[2] ?></td>
                        <td><?= $dados[3] ?></td>
                        <td><?= $dados[4] ?></td>
                        <td><a href="editar.php?codigo=<?= $dados[0] ?>">Editar</a></td>
                        <td><a href="excluir.php?codigo=<?= $dados[0] ?>">Excluir</a></td>
                    </tr>
                <?php } ?>

                <tr>
                    <td colspan="6"><strong>TOTAL:</strong> <?= $total ?> </td>
                </tr>
            </tbody>
        </table>
        <hr>

        <a class="columns is-centered" href="index.php">Voltar</a>
        <a class="columns is-centered" href="relatorio.php">Imprimir</a>
    </center>
</body>

</html>