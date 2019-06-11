<?php

/* 
Site: XeynerTec
Autor: Eduardo, Gabriel Queiroz, Lucas Rocha e Pedro Henrique Silva
Data: 19 de Junho, 2019
*/

/* Define a página atual pela URL */
$pagina = 'inicio';

if (isset($_GET['i'])) {
	$pagina = addslashes($_GET['i']);
}

/* Carrega o header.php */
include 'site/paginas/header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
	case 'inicio':
		include 'site/paginas/inicio.php';
		break;

	case 'sobre':
		include 'site/paginas/sobre.php';
		break;

	case 'navegar':
		include 'site/paginas/navegar.php';
		break;

	case 'blast':
		include 'site/paginas/blast.php';
		break;

	case 'login':
		include 'site/paginas/login.php';
		break;

	case 'cadastro':
		include 'site/paginas/cadastro.php';
		break;

	default:
		include 'site/paginas/inicio.php';
		break;
}

/* Carrega o footer.php */
include 'site/paginas/footer.php';
