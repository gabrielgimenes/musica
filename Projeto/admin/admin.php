<?php

session_start();

if(!$_SESSION['id']) {
	header('Location: index.php');
}

?>

Área do administrador <br>
Nome: <?php echo $_SESSION['nome']; ?> <br>
<a href="sair.php">Sair</a>