<?php
	/*Para utilizar as variáveis de sessão é preciso sempre iniciar a mesma.*/
	session_start();
	/*se o usuário tentar acessar a página home sem fazer login, será redirecionado para a página index.php*/
	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Twitter clone</title>
	<!--inserção jquery via cdn-->
	<script scr="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<!--link bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<!--Static navbar-->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="imagens/icone_twitter.png">
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="sair.php">Sair</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<br/><br/>
		<div class="col-md-4"></div>
		<div class="col-md-4">
			Usuário autenticado!
		</div>
		<div class="col-md-4"></div>
		<br/>
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>