<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'http://mortonsubastas.andyosuna.com/php/include-meta.php'; ?>
	
	<title>Morton Casa de Subastas - Inicio</title>

	<?php include 'http://mortonsubastas.andyosuna.com/php/include-css.php'; ?>
</head>

<body>
	<?php include 'http://mortonsubastas.andyosuna.com/php/include-header.php'; ?>

	<section id="slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#slider" data-slide-to="0" class="active"></li>
				<li data-target="#slider" data-slide-to="1"></li>
				<li data-target="#slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="/images/slides/slide-1.jpg" alt="Subasta de Joyer&iacute;a">
					<div class="carousel-caption">
						<h3>Subasta de Joyer&iacute;a</h3>
						<p>Relojes y Mobiliario Europeo <br><a href="#">Ver Evento -></a></p>
					</div>
				</div>
				<div class="item">
					<img src="/images/slides/slide-2.jpg" alt="Subasta de Vinos">
					<div class="carousel-caption">
						<h3>Subasta de Vinos</h3>
						<p>de Colecci&oacute;n, uso Diario y Destilados <br><a href="#">Ver Evento -></a></p>
					</div>
				</div>
				<div class="item">
					<img src="/images/slides/slide-3.jpg" alt="Subasta de Grabados">
					<div class="carousel-caption">
						<h3>Subasta de Grabados</h3>
						<p>Fotograf&iacute;a, Documentos Escritos y Manuscritos, Mapas, Libros Antig&uuml;os y Contempor&aacute;neos <br>(Incluye 12 Lotes de la Biblioteca Ecl&eacute;tica MONCLAU) <a href="#">Ver Evento -></a></p>
					</div>
				</div>
			</div>
	</section>

	<div id="content-wrapper">
		<div id="content">
			<section id="video" class="container-fluid">
				<h2>V&iacute;deo Destacado</h2>
				<div class="row">
					<div class="col-sm-6">
						<!-- TODO: add youtube video iframe or something -->
						<img src="/images/yt-thumbnail.jpg" alt="YouTube Video" style="margin:0 auto;width:100%">
					</div><!-- end .col-sm-6 -->
					<div class="col-sm-6">
						<p class="large">Drumstick kielbasa kevin short ribs sirloin fatback landjaeger pork chop shoulder filet mignon meatball. Pork sirloin frankfurter biltong pork loin tenderloin.</p>
					</div><!-- end .col-sm-6 -->
				</div><!-- end .row -->
			</section><!-- end #video -->

			<hr>

			<section id="catalogs" class="container-fluid">
				<h2>&Uacute;ltimos Cat&aacute;logos</h2>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="cat">
							<img src="/images/catalogs/cat-oportunidades.jpg" alt="Subasta de Oportunidades" title="Subasta de Oportunidades">
							<a href="#">Ver Cat&aacute;logo</a>
						</div><!-- end .cat -->
					</div><!-- end .col-md-4 -->
					<div class="col-md-4 col-sm-6">
						<div class="cat">
							<img src="/images/catalogs/cat-antiguedades.jpg" alt="Subasta de Antig&uuml;edades" title="Subasta de Antig&uuml;edades">
							<a href="#">Ver Cat&aacute;logo</a>
						</div><!-- end .cat -->
					</div><!-- end .col-md-4 -->
					<div class="col-md-4 col-sm-6">
						<div class="cat">
							<img src="/images/catalogs/cat-joyeria.jpg" alt="Subasta de Relojes y Joyer&iacute;a de la Fundaci&oacute;n Dond&eacute;" title="Subasta de Relojes y Joyer&iacute;a de la Fundaci&oacute;n Dond&eacute;">
							<a href="#">Ver Cat&aacute;logo</a>
						</div><!-- end .cat -->
					</div><!-- end .col-md-4 -->
				</div><!-- end .row -->
			</section><!-- end #catalogs -->
		</div><!-- #content -->

		<?php include 'http://mortonsubastas.andyosuna.com/php/include-footer.php'; ?>
	</div>

	<?php include 'http://mortonsubastas.andyosuna.com/php/include-js.php'; ?>
	<script type="text/javascript">
	$('#slider').carousel({pause:"hover";interval:2000;});
	</script>
</body>
</html>