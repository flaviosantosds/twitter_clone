<?php 
	//guarda na variável $erro o que está na url da página. Caso não tenha nada, guarda o valor 0.
	$erro = isset($_GET['erro']) ? $_GET['erro']:0;	
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="UTF-8">

		<title>Twitter clone</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
		<script>
			//código  javascript
			//verifica se o documento foi carregado e executa a função
			$(document).ready(function(){
				var campo_vazio=false;
				//verificar se os campos foram preenchidos corretamente
				$('#btn_login').click(function(){
					//verifica se o campo usuário está vazio. Se sim, pinta de vermelho a borda. Se não, pinta de cinza (cor padrão do campo).
					if($('#campo_usuario').val()==''){
						$('#campo_usuario').css({'border-color':'#A94442'});
						campo_vazio=true;
					}else{
						$('#campo_usuario').css({'border-color':'#CCC'});
					}
					//verifica se o campo senha está vazio. Se sim, pinta de vermelho a borda. Se não, pinta de cinza (cor padrão do campo).
					if($('#campo_senha').val()==''){
						$('#campo_senha').css({'border-color':'#A94442'});
						campo_vazio=true;
					}else{
						$('#campo_senha').css({'border-color':'#CCC'});
					}
					//return false no evento de click de um botão submit impede que o formulário seja enviado.
					if(campo_vazio){
						return false;
					}
				});
			});						
		</script>
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
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="inscrevase.php">Inscrever-se</a></li>
	            <li class="<?= $erro==1 ?'open' : ''?>">
	            	<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
					<ul class="dropdown-menu" aria-labelledby="entrar">
						<div class="col-md-12">
				    		<p>Você possui uma conta?</h3>
				    		<br />
							<form method="post" action="validar_acesso.php" id="formLogin">
								<div class="form-group">
									<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
								</div>
								
								<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

								<br /><br />
								
							</form>
							<!--Mostra mensagem de erro ao tentar logar com dados que não existem.-->
							<?php 
								if($erro==1){
									echo '<font color="#FF0000">Usuário e/ou senha inválido(s)</font>';
								}
							 ?>

						</div>
				  	</ul>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

	    <div class="container">
	    	<div class="jumbotron">
	    		<h1>Bem vindo ao twitter clone</h1>
	    		<p>Veja o que está acontecendo agora...</p>
	    	</div>
	    	<div class="clearfix"></div>
	    </div>
	    

	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>