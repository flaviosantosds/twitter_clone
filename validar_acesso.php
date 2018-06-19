<?php
	/*indica para o script que 
	ele terá acesso às funções de sessão.
	Deve sempre ser inserido no começo do código.*/
	session_start();
	//importa php para conexão com o banco de dados
	require_once('db.class.php');
	//guarda os valores de usuario e senha digitados no formulário dropdown da página index.php
	$usuario = $_POST['usuario'];
	//criptografando a senha digitada pelo usuário
	$senha = md5($_POST['senha']);
	//cria uma nova instância da classe db que realiza os predimentos de conexão com o banco de dados.
	$objDb = new db();
	//Guarda na variável $link a string de conexão retornada pelo método conecta_mysql() da classe db.
	$link = $objDb -> conecta_mysql();
	//código sql que será executado pelo php e retornará o usuário cadastrado no banco de acordo com os dados fornecidos pelo usuário através do formulário de login.
	$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
	//Ao executar um sql, o mysqli retorna um resource que precisa ser armazenado e convertido posteriormente por outra função para que o dado seja lido pelo usuário.
	$resultado_id = mysqli_query($link, $sql);
	if ($resultado_id) {
		//a função mysqli_fetch_array pega um resource e converte ele em um array que pode ser manipulado.
		$dados_usuario = mysqli_fetch_array($resultado_id);
		//verifica se foi retornado algum resultado na consulta ou se está vazia
		if(isset($dados_usuario['usuario'])){
			/*super global semelhante ao _POST e _GET, com a diferença que ela fica disponível em qualquer página. Através dela é possível criar índices que ficarão disponíveis em todo o código.*/
			$_SESSION['usuario']=$dados_usuario['usuario'];
			$_SESSION['email']=$dados_usuario['usuario'];
			header('Location: home.php');
		}else{
			//caso o usuário tenha errado um usuário e/ou senha, o mesmo será redirecionado para a página index.php
			header('Location: index.php?erro=1');
		}
	} else {
		//se não conseguir executar a consulta, mostra a mensagem de erro.
		echo 'Erro na execução da consulta!';
	}
 ?>