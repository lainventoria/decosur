<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			footer.inc.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
?>
		</div>
		<div id="como_llegar_pop" style="display: none;"></div>
		<div id="pie">
Morse Esq. Sargento Ponce (1871 ) Dock Sud - Provincia de Buenos Aires - Argentina <br />
Teléfono (54 11) 4222-9240 / 4201-0922 - <br /> <a href="mailto:administracion@decosurcoop.com.ar">administracion@decosurcoop.com.ar</a>
			<a id="coopdisenio" href="#"></a>
		</div>
		<script>
			$(document).ready(function(){
				$( ".como-llegar" ).click(function() {
					$( "#como_llegar_pop" ).fadeIn("slow");
					return false;
				});
				$( "#como_llegar_pop" ).click(function() {
					$( "#como_llegar_pop" ).fadeOut("slow");
				});
				function loop_homeanimaciontexto () {
					$( "#homeanimaciontexto" ).delay(5000).animate({
						opacity: 0,
						left: "+=150",
						}, 3000, function() {
							$(this).html("Terminal Portuaria <br />Tanques fiscales ");
						}).animate({
						left: "-=150",
						}, 0).animate({
						opacity: 1
						}, 1000, function () {
							loop_homeanimaciontexto();
						}).delay(5000).animate({
						opacity: 0,
						left: "+=150",
						}, 3000, function() {
							$(this).html("Almacenamiento y logística<br />para productos líquidos ");
						}).animate({
						left: "-=150",
						}, 0).animate({
						opacity: 1
						}, 1000, function () {
							loop_homeanimaciontexto();
						})
				}
				loop_homeanimaciontexto();
				/*
			  $(".mas").mouseup(function(event){
			    var offset = $($(this).attr('href')).offset().top;
		    	$('html, body').delay(200).animate({scrollTop:offset}, 500);
			  }); */
			});
		</script>
	</body>
</html>
