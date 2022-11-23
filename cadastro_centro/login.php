<?php

include_once('conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql_logar = mysqli_query($ligar, "SELECT * FROM tb_usuarios WHERE usuario = '$usuario'
and senha = '$senha'");

if (mysqli_num_rows($sql_logar) != 0) {
    header('location: lista.php');
} else {
    echo " <script>
    alert('Usuário não registrado!');
    window.location.href='index.php';
    </script> ";
}
