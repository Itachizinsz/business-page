<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Template de login, usando Bootstrap.</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
  <div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-lg-6">
			<div class="card shadow-sm">
				<div class="card-header bg-primary text-white">
					<h3 class="mb-0">Cadastro de Usuário</h3>
				</div>
				<div class="card-body">
					<form action="php/cadastrarUsuario.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" id="nome" name="nome" placeholder="nome" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="email" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="senha" name="senha" placeholder="senha"required>
						</div>
						<div class="d-grid">
							<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
						</div>
						<label>
							<a href="index.php" id="login">Faça Login</a>
						</label>
						<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


  </body>
</html>