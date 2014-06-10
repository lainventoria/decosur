<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/


# Get this theme's settings based on what was entered within its plugin.
# This function is in functions.php
$innov_settings = Innovation_Settings();

# Include the header template
include('header.inc.php');
?>

	<div id="homebanner">
		<div class="sombra1"></div>
		<h1><?php get_page_title(); ?></h1>
		<div class="sombra1 relativo"></div>
		<div class="imagen"></div>
	</div>

<?php get_page_content(); ?>

<!-- include the footer template -->
<?php include('footer.inc.php'); ?>
