<?php
include('usuario.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cafeímetro</title>
		<meta charset="utf-8">
		<link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
		<link href="css/cafeimetro.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">		
		  <a class="navbar-brand" href="plataforma.php">
		  <i class="fa fa-coffee fa-3x" style="color:#A38068"></i>
		  </a>
		  
		  <div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item">
				<a class="nav-link" href="cafe-lista.php">Cafés</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="cafe-form-adiciona.php">Adiciona Café</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="tipo-lista.php">Tipos</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="tipo-form-adiciona.php">Adiciona Tipo</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="consumo-lista.php">Meu Consumo</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="logout.php">| Sair</a>
			  </li>
			</ul>
			<span class="navbar-text">
			  Usuário Logado: <?php echo $_SESSION["USUARIO"]["EMAIL"] ?>
			</span>
		  </div>
		</nav>

		<div class="container">

			<div class="principal">
			
<?php
include 'usuario-valida-acesso.php';
?>			
			



