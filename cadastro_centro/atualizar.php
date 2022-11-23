<?php

require_once('conexao.php');

$id = $_POST['codigo'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

$sql_atualizar = mysqli_query($ligar, "UPDATE tb_usuarios SET usuario = '$usuario',
email = '$email', senha = '$senha', nivel = '$nivel' WHERE id = '$id'");

if ($sql_atualizar == true) {
    echo " <script>
    alert('Usuário atualizado com sucesso!');
    window.location.href='listarusuarios.php';
    </script> ";
} else {
    echo " <script>
    alert('Falha na edição!');
    window.location.href='editar.php';
    </script> ";
}
