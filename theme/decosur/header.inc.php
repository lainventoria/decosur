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
				<ul id="menu">
					<!-- tengo que ver que onda este menu -->
					<?php get_navigation(get_page_slug(FALSE)); ?>
				</ul>
				<div id="idioma">| Español</div>
			</div>
		</div>
		<div id="contenido">
