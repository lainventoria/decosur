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
	<?php if (isset($language) && $language == 'en') { ?>
	<link type="text/css" rel="stylesheet" href="<?php get_theme_url(); ?>/css/estilo_en.css" />
	<?php } ?>
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
					<?php get_i18n_navigation(get_page_slug(FALSE)); ?>
					
				</ul>
				<ul id="submenu_cooperativa">
					<li class="coop_cooperativa"><a href="?id=cooperativa" title="cooperativa">
						<?php if (isset($language) && $language == 'en') { ?>
						COOPERATIVE
						<?php } else { ?>
						COOPERATIVA
						<?php } ?>
					</a></li>
					<li class="historia"><a href="?id=historia" title="HISTORIA">
						<?php if (isset($language) && $language == 'en') { ?>
						HISTORY
						<?php } else { ?>
						HISTORIA
						<?php } ?>
					</a></li>
				</ul>
				<ul id="submenu">
					<li class="tanques"><a href="?id=tanques" title="TANQUES">						
						<?php if (isset($language) && $language == 'en') { ?>
						TANKS
						<?php } else { ?>
						TANQUES
						<?php } ?></a></li>
					<li class="gestion"><a href="?id=gestion" title="GESTIÓN">
						<?php if (isset($language) && $language == 'en') { ?>
						MANAGEMENT
						<?php } else { ?>
						GESTION
						<?php } ?>
					</a></li>
					<li class="plantas"><a href="?id=plantas" title="PLANTAS">
						<?php if (isset($language) && $language == 'en') { ?>
						PLANTS
						<?php } else { ?>
						PLANTAS
						<?php } ?>
					</a></li>
				</ul>
				<div id="idioma"><a href="./?setlang=en">English</a> | <a href="./?setlang=es">Español</a></div>
			</div>
		</div>
		<div id="contenido">
