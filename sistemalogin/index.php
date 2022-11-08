<?php
// CONEXÃO
require_once 'db_connect.php';

// SESSÃO
session_start();

// BOTÃO ENVIAR PARA PEGAR INFORMAÇÕES
if(isset($_POST['btn-entrar'])):
	$erros = array();
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	if(empty($login) or empty($senha)):
		$erros[] = "<li>O campo login/senha precisa ser preenchidos!</li>";
	else:
		$sql = "SELECT login from usuarios where login = '$login'";
		$resultado = mysqli_query($connect, $sql);

		if(mysqli_num_rows($resultado) > 0): // numero de linhas
			$senha = md5($senha);
			$sql = "SELECT * from usuarios where login = '$login' and senha = '$senha'";
			$resultado = mysqli_query($connect, $sql);

			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				$_SESSION['logado']= true;
				$_SESSION['id_usuario'] = $dados['id'];
				header('location: home.php');
			else:
				$erros[] = "<li>Usuário e senha não conferem!</li>";
			endif;
		else:
			$erros[] = "<li>Usuário inexistente!</li>";
		endif;
	endif;

endif;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Login</title>
</head>
<body>
	<h1>Login</h1>
	<?php
	if(!empty($erros)): // se não estiver vazio é pq contem erro
		foreach ($erros as $erro):
			echo $erro;
		endforeach;
	endif;
	?>
	<hr>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Login: <input type="text" name="login"><br>
		Senha: <input type="password" name="senha"><br>
		<button type="submit" name="btn-entrar">Entrar</button>
	</form>
</body>
</html>