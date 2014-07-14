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
	<link type="text/css" rel="stylesheet" href="<?php get_theme_url(); ?>/css/orbit-1.2.3.css" />
	<link type="text/css" rel="stylesheet" href="<?php get_theme_url(); ?>/css/estilo.css" />
	<?php get_header(); ?>
	<script src="<?php get_theme_url(); ?>/assets/js/jquery-1.10.2.js"></script>
	<script src="<?php get_theme_url(); ?>/assets/js/jquery.orbit-1.2.3.min.js"></script>
</head>
	<body id="<?php get_page_slug(); ?>" >
		<div id="menusuperior">
			<div class="barranaranja"></div>
			<div class="contenedor">
				<div id="logo"><a href="./"></a></div>
				<ul id="menu">
					<!-- tengo que ver que onda este menu -->
					<?php get_navigation(get_page_slug(FALSE)); ?>
				</ul>
				<ul id="submenu_cooperativa">
					<li class="coop_cooperativa"><a href="?id=cooperativa" title="cooperativa">COOPERATIVA</a></li>
					<li class="historia"><a href="?id=historia" title="HISTORIA">HISTORIA</a></li>
				</ul>
				<ul id="submenu">
					<li class="tanques"><a href="?id=tanques" title="TANQUES">TANQUES</a></li>
					<li class="gestion"><a href="?id=gestion" title="GESTIÓN">GESTIÓN</a></li>
					<li class="plantas"><a href="?id=plantas" title="PLANTAS">PLANTAS</a></li>
				</ul>
				<div id="idioma">| Español</div>
			</div>
		</div>
		<div id="contenido">
