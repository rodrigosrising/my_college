<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<?php wp_head(); ?>
</head>
<body>
	<header class="site-header">
		<div class="container">
			<h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Super</strong> Faculdade</a></h1>
			<span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
			<i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
			<div class="site-header__menu group">
				<nav class="main-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'headerMenu'
					) );
					?>
					<!-- <ul>
						<li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
						<li><a href="#">Programs</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="#">Campuses</a></li>
						<li><a href="#">Blog</a></li>
					</ul> -->
				</nav>
				<div class="site-header__util">
					<a href="#" class="btn btn--small btn--orange float-left push-right">Entrar</a>
					<a href="#" class="btn btn--small  btn--dark-orange float-left">Cadastre-se</a>
					<span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>
	</header>