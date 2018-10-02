<?php

require 'connect.php';

session_start();

	if(!empty($_SESSION['id'])) {
		header('Location: admin.php');
	}

	if(isset($_POST['submit'])) {	
		$email = $_POST['email'];
		$senha = $_POST['password'];
		if(!empty($email) && $senha) {
			$consulta = $pdo->prepare("SELECT id, email, nome FROM usuarios WHERE email = :email AND senha = :senha");
			$consulta->bindValue(':email', $email);
			$consulta->bindValue(':senha', md5($senha));
			$consulta->execute();

			if($consulta->rowCount() > 0) {
				$dados = $consulta->fetch(PDO::FETCH_ASSOC);
				$_SESSION['id'] = $dados['id'];
				$_SESSION['email'] = $dados['email'];
				$_SESSION['nome'] = $dados['nome'];
				header('Location: admin.php');
			} else {
				echo 'Usuário não encontrado';
			}
			
		} else {
			echo 'Usuário não digitou';
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
</head>
<body>
	<h1>Admin</h1>
	<form method="POST" action="index.php">
		<input type=email name="email" placeholder="E-mail"><br><br>
		<input type="password" name="password" placeholder="Senha"><br><br>
		<input type="submit" name="submit" value="Logar">
	</form>
</body>
</html>