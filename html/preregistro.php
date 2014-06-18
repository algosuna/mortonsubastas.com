<?php require '/home1/andrea/public_html/sites/mortonsubastas.com/html/php/parse-preregistro.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'http://mortonsubastas.andyosuna.com/php/include-meta.php'; ?>
	
	<title>Morton Casa de Subastas - Registro</title>

	<?php include 'http://mortonsubastas.andyosuna.com/php/include-css.php'; ?>
	<style type="text/css">
	.contact-form {
		max-width: 600px;
		margin: 0 auto;
		margin-top: 30px;
	}
	</style>
</head>

<body>
	<?php include 'http://mortonsubastas.andyosuna.com/php/include-header.php'; ?>

	<section id="banner">
		<img src="/images/banners/dep-arte-moderno.jpg">
	</section>

	<div id="content">

		<h1>Pre-Registro</h1>

		<div class="cont">
			<p class="large">Pre-reg&iacute;strese para participar en nuestra pr&oacute;xima subasta. Uno de nuestros colaboradores se pondr&aacute; en contacto con usted.</p>
			<?php if ($mail_sent == 1) {
				echo $notification;
			} else { ?>
			<form class="contact-form clearfix" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="contact-form">
				<p>Todos los campos son requeridos.</p>
				<ul>
					<li>
						<label for="name">Nombre:</label>
						<input type="text" name="name" placeholder="Juan P&eacute;rez" value="<?php echo ($name); ?>" required>
						<?php if ($valid == false) echo ($nmErr); ?>
					</li>
					<li>
						<label for="email">Correo Electr&oacute;nico:</label>
						<input type="email" name="email" placeholder="juan.perez@ejemplo.com" value="<?php echo $email; ?>" required>
						<?php if ($valid == false) echo ($emErr); ?>
					</li>
					<li>
						<label for="tel">Tel&eacute;fono:</label>
						<input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}||[0-9]{10}" name="tel" placeholder="555-555-5555" value="<?php echo $tel; ?>">
						<?php if ($valid == false) echo ($telErr); ?>
					</li>
					<li>
						<label for="message">Subasta:</label>
						<textarea name="message" cols="40" rows="6" placeholder="Escriba el nombre de la subasta en la que desea participar..." required><?php echo ($message); ?></textarea>
						<?php if ($valid == false) echo ($msErr); ?>
					</li>
					<li>
						<button class="btn-morton submit" type="submit">Enviar!</button>
						<input type="hidden" name="did_send" value="true" />
					</li>
				</ul><!-- end ul -->
			</form><!-- end .contact-form -->
			<?php } //-- end if ?>
		</div>

	</div><!-- end #content -->

	<?php include 'http://mortonsubastas.andyosuna.com/php/include-footer.php'; ?>

    <?php include 'http://mortonsubastas.andyosuna.com/php/include-js.php'; ?>
</body>
</html>