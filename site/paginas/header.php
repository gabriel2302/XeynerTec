<!doctype html>
<html>
<head>
	<title>XeynerTEC</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/all.min.css">
	<link rel="stylesheet" href="public/css/style.css">
	<link rel="shortcut icon" href="public/img/logopequeno.svg" sizes="32x32" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<?php 
include_once "conexao.php"

?>
	<header>
<!-- 	<nav class="navbar navbar-inverse navbar-fixed">
		<div class="container">
			
		    <div class="navbar-header">
		    	
		    	<a href="?i=home" alt="betabase - home" title="Home"><img id="logo" src="public/img/logo.svg"></a>

		    	
				<button type="button" style="margin-top:25px" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_lista" aria-expanded="false">
					<span style="background-color:#9bbd46" class="icon-bar"></span>
					<span style="background-color:#9bbd46" class="icon-bar"></span>
					<span style="background-color:#9bbd46" class="icon-bar"></span>
				</button>
				
		    </div>

			<div class="collapse navbar-collapse" id="menu_lista">
				<ul class="nav navbar-nav navbar-right">
					<li class="link_menu"><a href="?i=sobre">Sobre</a></li>
					<li class="link_menu"><a href="?i=navegar">Navegar</a></li>
					<li class="link_menu"><a href="?i=blast">BLAST</a></li>
					<li class="link_menu"><a href="#help">Ajuda</a></li>
				</ul>
			</div>

		</div>
	</nav> -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

	<div class="container">
	
		<a class="navbar-brand" href="?i=inicio"><img id="logo" src="public/img/drawing.svg"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse " id="conteudoNavbarSuportado" >
			<ul class="navbar-nav  ml-md-auto" >
				<li class="nav-item active">
					<a class="nav-link" href="#presobre">Empresa<span class="sr-only">(página atual)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#preservicos">Serviços</a>
				</li>
				
				<li class="nav-item active">
					<a class="nav-link " href="#contato">Contato</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link " href="?i=login">Login</a>
				</li>
			</ul>

		</div>
		</div>
	</nav>

</header>

