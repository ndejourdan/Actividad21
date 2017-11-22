<?php get_header(); ?>

	<div class="container sec2">
			<h2>EL BOOTCAMP DE PROGRAMACIÓN MÁS GRANDE DE LATINOAMÉRICA</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. </p>



						<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1"></li>
					    <li data-target="#myCarousel" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
					    	<img src="<?php bloginfo('template_url') ?>/images/bg.jpeg" alt="ruleta"> 
					    </div>

					    <div class="item">
					      <img src="<?php bloginfo('template_url') ?>/images/bg22.jpeg" alt="macbook">
					    </div>

					    <div class="item item3">
					      <img src="<?php bloginfo('template_url') ?>/images/happy-people.png" alt="happy people">
					    </div>
					  </div>

					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
	</div>

	<div class="jumbotron">
			<h2>SOLICITA INFORMACIÓN E INSCRÍBETE</h2>
			<p class="p1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>

			<button id="blue" type="button" class="btn btn-default navbar-btn">Inscríbete!</button>

		<p class="p2">Vive la experiencia Desafío Latam!</p>
	</div>


<?php get_footer(); ?>