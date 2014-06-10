<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			header.inc.php
* @Package:		GetSimple

* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?><!DOCTYPE html>
<html lang="es" >
<head>	
	<meta name="robots" content="index, follow">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8;charset=utf-8">
	<title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	<link type="text/css" rel="stylesheet" href="<?php get_theme_url(); ?>/css/estilo.css" />
	<?php get_header(); ?>
</head>
	<body id="<?php get_page_slug(); ?>" >
		<div id="menusuperior">
			<div class="barranaranja"></div>
			<div class="contenedor">
				<div id="logo"></div>
				<div id="menu">
					<!-- tengo que ver que onda este menu -->
					<?php get_navigation(get_page_slug(FALSE)); ?>
					<a href="#">COOPERATIVA</a>
					<a href="#">NOTICIAS</a>
					<a href="#">SERVICIOS</a>
					<a href="#">CLIENTES</a>
					<a href="#">CONTACTO</a>
					<a href="#" class="fin">CONTACTO</a>
					<a href="#" id="comollegar" >CÓMO LLEGAR</a>
				</div>
				<div id="submenu">
					<a href="#">GESTIÓN</a>
					<a href="#">TANQUES</a>
					<a href="#">PLANTAS</a>
				</div>
				<div id="idioma">| Español</div>
			</div>
		</div>
		<div id="contenido">
