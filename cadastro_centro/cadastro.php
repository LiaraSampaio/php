<?php

require_once('conexao.php');

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

$sql_cadastro = mysqli_query($ligar, "INSERT INTO tb_usuarios (usuario, email, senha, nivel)
VALUES ('$usuario', '$email', '$senha', '$nivel')");

if ($sql_cadastro == true) {
    echo " <script>
    alert('Usuário cadastrado com sucesso!');
    window.location.href='index.php';
    </script> ";
} else {
    echo " <script>
    alert('Falha ao cadastrar!');
    window.location.href='cadastrousuario.html';
    </script> ";
}
