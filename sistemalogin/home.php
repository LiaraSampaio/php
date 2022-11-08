<?php 
require_once 'db_connect.php';

session_start();

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * from usuarios where id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

// VERIFICAÇÃO PRA NAO FICAR LOGADO NA PAGINA
if(!isset($_SESSION['logado'])):
	header('location: index.php');
endif;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página Restrita</title>
</head>
<body>
	<h1>Olá <?php echo $dados['nome']; ?>!</h1>
	<a href="logout.php">Sair</a>
</body>
</html>