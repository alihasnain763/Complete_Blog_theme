<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <?php wp_head() ?>
	</head>
	<body <?php body_class('homepage is-preload') ?>>
		<div id="page-wrapper">

			<!-- Header -->
			<section id="header">

				<!-- Logo -->
				<?php the_custom_logo( ) ?>

				<!-- Nav -->
                <nav id="nav">
                    <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container' => ''
                        ) ); 
					?>
					
                </nav>
				<button class="menu-toggle" id="toggleNav"><i class="icon solid fa-bars"></i></button>

			</section>