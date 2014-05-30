<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'php/include-meta.php'; ?>
	
	<title>Morton Casa de Subastas - Template</title>

	<?php include 'php/include-css.php'; ?>
</head>

<body>
	<?php include 'php/include-header.php'; ?>

	<section id="banner">
		<img src="images/banners/dep-arte-moderno.jpg">
	</section>

	<div id="content">

		<h1>Department Title</h1>

		<!-- TODO 29/05/2014 - Add them breadcrumbs! -->

		<section class="cont">

			<h2 class="align-left">Descripci&oacute;n</h2>

			<img src="images/cont-sample.jpg" width="306" height="198" class="pull-right">
			<p>Bacon ipsum dolor sit amet turkey tail pork belly, rump tenderloin ham t-bone pork. Andouille swine tail pork loin ball tip ham ham hock sirloin beef doner tri-tip. Pork loin strip steak kevin frankfurter flank.</p>
			<p>Bacon kevin strip steak, pancetta hamburger frankfurter andouille kielbasa meatloaf jerky shoulder cow ground round prosciutto. Beef ribs sausage doner tongue chicken.</p>


		</section>

		<hr>

		<section class="cont">

			<h2 class="align-left">Pr&oacute;ximos Eventos</h2>

			<table>
				<tr>
					<td>&nbsp;</td>
					<td>Fecha</td>
					<td>Hora</td>
					<td>Lugar</td>
					<td>Descripci&oacute;n</td>
				</tr>
				<tr>
					<td><img src=""></td>
					<td>Jueves, 29 de Mayo</td>
					<td>19:00</td>
					<td>Monte Athos 179</td>
					<td>
						<p>Bacon ipsum dolor sit amet sirloin salami prosciutto drumstick shank beef pastrami chuck ball tip filet mignon corned beef pork belly bresaola pork meatloaf.</p>
					</td>
				</tr>
			</table>


		</section>

		<hr>

		<section class="cont clearfix">

			<h2 class="align-left">Especialistas</h2>

			<div class="staff">
				<div class="staff-box">
					<img src="images/staff/loin-pork.jpg" width="153" height="200">
					<h3>Pork Loin</h3>
					<h4>Bacon Specialist</h4>
					<h5>11 Years</h5>
					<p>Bacon ipsum dolor sit amet sirloin salami prosciutto drumstick shank beef pastrami chuck ball tip filet mignon corned beef pork belly bresaola pork meatloaf.</p>
				</div><!-- end .staff-box -->
			</div><!-- end .staff -->

			<div class="staff">
				<div class="staff-box">
					<img src="images/staff/salami-sirloin.jpg" width="153" height="200">
					<h3>Sirloin Salami</h3>
					<h4>Drumstick Specialist</h4>
					<h5>11 Years</h5>
					<p>Bacon ipsum dolor sit amet sirloin salami prosciutto drumstick shank beef pastrami chuck ball tip filet mignon corned beef pork belly bresaola pork meatloaf.</p>
				</div><!-- end .staff-box -->
			</div><!-- end .staff -->

		</section>

	</div><!-- end #content -->

	<?php include 'php/include-footer.php'; ?>

    <?php include 'php/include-js.php'; ?>
</body>
</html>