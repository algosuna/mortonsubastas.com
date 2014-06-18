<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'http://mortonsubastas.andyosuna.com/php/include-meta.php'; ?>
	
	<title>Morton Casa de Subastas - Resultados</title>

	<?php include 'http://mortonsubastas.andyosuna.com/php/include-css.php'; ?>
	<style>
	#content iframe {
		width: 100%;
		margin: 0 auto;
	}
	</style>
</head>

<body>
	<?php include 'http://mortonsubastas.andyosuna.com/php/include-header.php'; ?>

	<section id="banner">
		<img src="/images/banners/dep-arte-moderno.jpg">
	</section>

	<div id="content">

		<h1>Resultados de Subastas</h1>

		<ol class="breadcrumb">
			<li><a href="/">Inicio</a></li>
			<li><a href="/subastas/">Subastas</a></li>
			<li class="active">Resultados</li>
		</ol>

		<section class="cont">

			<iframe scrolling="no" width="1200" border="no" height="2550" src="http://staging.lmorton.rfcsystems.com/sp/asp/schedule.asp"></iframe>

		</section><!-- end .cont -->

	</div><!-- end #content -->

	<?php include 'http://mortonsubastas.andyosuna.com/php/include-footer.php'; ?>

    <?php include 'http://mortonsubastas.andyosuna.com/php/include-js.php'; ?>
</body>
</html>