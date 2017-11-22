<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset') ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo( 'the_title' ); ?></title> 
<?php wp_head() ?>
</head>
<body>
	<header class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="logo_container col-md-4">
					<img id="logo" src="<?php bloginfo('template_url') ?>/images/latam_logo.png">
				</div>
				<div class="navbar-header col-md-4 col-md-offset-4">
					<ul>
						<li>Equipo</li>
						<li>Blog</li>
						<li>Contacto</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="big-text">	
				<h1>Comienza una nueva vida y únete al mundo tecnológico</h1>
				<button id="blue" type="button" class="btn btn-default navbar-btn">Comienza acá!</button>
				<button id="green" type="button" class="btn btn-default navbar-btn">Más Info</button>
				<p>Hay una escasez gigante de desarrolladores en el mundo y más aún en Latinoamérica, se necesitan más desarrolladores y Tú puedes ser uno!</p>
			</div>
		</div>
		
	</header>