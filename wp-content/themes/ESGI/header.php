<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="site-header">
			<div class="container">
				<?php
				if (has_nav_menu('primary_menu')){
					wp_nav_menu(
						[
							'container'  => 'nav',
							'theme_location' => 'primary_menu',
							'container_class' => 'main-navbar'
						]
					);
				} 
				?>
			</div>
		</header>