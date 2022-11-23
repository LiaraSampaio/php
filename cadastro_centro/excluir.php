<?php
include_once('conexao.php');

$id = $_GET['codigo'];

$sql_excluir = mysqli_query($ligar, "DELETE FROM tb_usuarios WHERE id = '$id'");

if ($sql_excluir == true) {
    echo " <script> 
    alert('O usuário excluído com sucesso!');
    window.location.href = 'listarusuarios.php';
    </script> ";
} else {
    echo " <script> 
    alert('Falha ao excluir usuário!');
    window.location.href = 'listarusuarios.php';
    </script> ";
}
