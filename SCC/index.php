<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Controle Clínico</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	
	<style>
		body{
			background-color: #F2F2F2;
		}
		.login{
			display: flex;
			width: 100%;
			height: 100vh;
			justify-content: center;
			align-items: center;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg bg-body-tertiary">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">SCC</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        
	      </ul>
	      <form class="d-flex" role="search">
	        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-success" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>
	
<div class="login">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4">
				<div class="card">
					<div class="card-body">
						<h3>Acesso Restrito</h3>
					</div>
					<div class="card-body">
						<form action="login.php" method="POST">
							<div>
								<div class="mb-3">
									<label>Usuário</label>
									<input type="text" name="usuario" class="form-control">
								</div>
							</div>
							<div>
								<div class="mb-3">
									<label>Senha</label>
									<input type="password" name="senha" class="form-control">
								</div>
							</div>
							<div>
								<div class="mb-3">
									<button type="submit" class="btn btn-primary">Enviar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<div class="container">
		<div class="row mt-3">
			<div class="col">
				<?php
					//conexao com o banco de dados
					include("config.php");
					
					switch (@$_REQUEST["page"]) {
						case 'cadastrar-medico':
							include('cadastrar-medico.php');
							break;
						case 'editar-medico':
							include('editar-medico.php');
							break;
						case 'listar-medico':
							include('listar-medico.php');
							break;
						case 'salvar-medico':
							include('salvar-medico.php');
							break;

						case 'cadastrar-paciente':
							include('cadastrar-paciente.php');
							break;
						case 'editar-paciente':
							include('editar-paciente.php');
							break;
						case 'listar-paciente':
							include('listar-paciente.php');
							break;
						case 'salvar-paciente':
							include('salvar-paciente.php');
							break;

						case 'cadastrar-consulta':
							include('cadastrar-consulta.php');
							break;
						case 'editar-consulta':
							include('editar-consulta.php');
							break;
						case 'listar-consulta':
							include('listar-consulta.php');
							break;
						case 'salvar-consulta':
							include('salvar-consulta.php');
							break;
						
						default:
						if(empty($_SESSION)){
							print "<script>';</script>";
						}else{
							include("home.php");
						}
					}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>