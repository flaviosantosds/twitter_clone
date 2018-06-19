<?php 
	//importa o código php de conexão com o banco de dados
	require_once('db.class.php');

	/*Armazena os dados preenchidos pelo usuário no formulário da página inscrevase.php*/
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	//criptografando a senha
	$senha = md5($_POST['senha']);

	//cria uma nova instância da classe de conexão
	$objDb = new db();

	//Salva o link retornado pelo método de conexão em uma variável
	$link = $objDb -> conecta_mysql();

	//cria o comando sql a ser executado
	$sql = "INSERT INTO usuarios(usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";

	//executar a query
	if(mysqli_query($link, $sql)){
		echo 'Usuário cadastrado com sucesso.';
	}else{
		echo 'Erro ao tentar cadastrar.';
	}

 ?>