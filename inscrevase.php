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
			// código javascript						
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
	        		<li><a href="index.php">Voltar para a Home</a></li>
	        	</ul>
	        </div>

	      </div>
	    </nav>

	    <div class="container">
	    	<br><br>
	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Inscreva-se já.</h3>
	    		<br>
	    		<form method="post" action="registra_usuario.php" id="formCadastrarse">
	    			<div class="form-group">
	    				<input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuário" required="required">
	    			</div>
	    			<div class="form-group">
	    				<input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
	    			</div>
	    			<div class="form-group">
	    				<input type="password" name="senha" id="senha
	    				" placeholder="Senha" required="required" class="form-control">
	    			</div>
	    			<button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
	    			
	    		</form>
	    	</div>
	    	<div class="col-md-4"></div>

	    	<div class="clearfix"></div>
	    	<br/>
	    	<div class="col-md-4"></div>
	    	<div class="col-md-4"></div>
	    	<div class="col-md-4"></div>

	    </div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	    
</body>
</html>