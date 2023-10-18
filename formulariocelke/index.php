<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>	
		<style type="text/css">
		body{
			text-align: center;
			font-size: 32px;
		}
	</style>	
	</head>
	<body>
	<a href="index.php">Cadastrar</a><br>
	<a href="listar.php">Listar</a><br>

		<p>Cadastrar Usuário</p>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>