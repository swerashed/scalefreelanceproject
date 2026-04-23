<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scaletopia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div class="cursor"></div>
	<!-- preloader-->
	<!-- <div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
			</div>
		</div>
	</div> -->

	<div id="mobile-menu">
		<div class="mobile-menu-header">
			<div class="logo">
				<a href="<?php echo home_url('/') ?>">
					<img src="<?php echo get_template_directory_uri() ?>/src/img/logo.svg" alt="Scaletopia" />
				</a>
			</div>
			<div class="close-menu">
				<svg class="close-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path d="M1.66675 1.66675L18.3334 18.3334" stroke="white" stroke-width="1.5" stroke-linecap="round"
						stroke-linejoin="round" />
					<path d="M1.66675 18.3334L18.3334 1.66675" stroke="white" stroke-width="1.5" stroke-linecap="round"
						stroke-linejoin="round" />
				</svg>
			</div>
		</div>
		<nav class="mobile-menu-nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id' => 'primary-menu',
				)
			);
			?>
		</nav>
		<div class="mobile-menu-cta">
			<a href="/application" class="animated-button stop-animation">Apply for risk-free pilot</a>
		</div>
	</div>
	<div id="main-content">
		<!-- Header -->
		<header id="header-section">
			<div class="container">
				<div class="header-content">
					<div class="logo">
						<a href="<?php echo home_url('/') ?>">
							<img src="<?php echo get_template_directory_uri() ?>/src/img/logo.svg" alt="Scaletopia" />
						</a>
						<div class="mobile-toogle">
							<div class="burger-menu">
								<svg class="burger-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M3.33325 4.16675H16.6666" stroke="white" stroke-width="1.5"
										stroke-linecap="round" stroke-linejoin="round" />
									<path d="M3.33325 10H16.6666" stroke="white" stroke-width="1.5"
										stroke-linecap="round" stroke-linejoin="round" />
									<path d="M3.33325 15.8333H16.6666" stroke="white" stroke-width="1.5"
										stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</div>
						</div>
					</div>
					<nav class="primary-menu">

						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_id' => 'primary-menu',
							)
						);
						?>
					</nav>
					<div class="cta">
						<a href="/application" class="animated-button stop-animation">Apply for risk-free pilot</a>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->
		<script>!function (key) { if (window.reb2b) return; window.reb2b = { loaded: true }; var s = document.createElement("script"); s.async = true; s.src = "https://ddwl4m2hdecbv.cloudfront.net/b/" + key + "/" + key + ".js.gz"; document.getElementsByTagName("script")[0].parentNode.insertBefore(s, document.getElementsByTagName("script")[0]); }("E63P0HZ495OW");</script>