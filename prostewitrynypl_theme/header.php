<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ProsteWitryny.pl_-_Start_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- <link rel="preload" fetchpriority="high" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/img/glowna/rosnace-zarobki-firmy.webp" type="image/webp">
	<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/font/Montserrat-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/font/Montserrat-Regular.woff2" as="font" type="font/woff2" crossorigin> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'prostewitrynypl_theme' ); ?></a>

	<header id="masthead" class="site-header">

	<div id="top-contact">
			<div class="container-fluid">
				<div class="row top-contact-row" id="top-contact-row-id">
					<div class="col-1 social-col">
						<a href="https://www.facebook.com/ProsteWitryny" target="_blank" aria-label="Przejdź do firmowego facebooka">
							<i class="fa-brands fa-facebook-f top-social-icon fb-top"></i>
						</a>
					</div>
					<div class="col-1 social-col">
						<a href="" target="_blank" aria-label="Przejdź do wizytówki Google">
							<i class="fa-brands fa-google top-social-icon google-top"></i> K
						</a>
					</div>
					<div class="col-auto">
						<a href="tel:+48">
							<i class="fa-solid fa-phone"></i>
							123 456 789
						</a>
					</div>
					<div class="col-auto">
						<a href="mailto:">
							<i class="fa-solid fa-envelope"></i>
							e@mail.pl
						</a>
					</div>
					
				</div>
			</div>
		</div>
		
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="navv">
			<div class="container-fluid">
				<div class="row brand-menu-top-scrolled">

				<div class="col scrolled-menu-col">
					<a class="navbar-brand" href="<?php echo site_url('/'); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/logoTheme.png" alt="Logo" width="75" height="30" class="d-inline-block align-text-top logo-square" id="logo-square">
					</a>

					<a href="tel:+48" class="scrolled-phone" id="scrolled-phone">
						<i class="fa-solid fa-phone"></i>
					</a>
				
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				
				
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => false,
							'container'       => 'div',
							'container_id'    => 'primary-menu',
							'container_class' => 'collapse navbar-collapse justify-content-end',
							'menu_class'      => 'navbar-nav ml-auto',
							'depth'           => 2,
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						)
					);
				?>
				</div>
			</div>
		</nav>

		<div class="breadcrumb-div">
			<div class="container-fluid">
				<div class="row">
					<div class="col">

						<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
							<?php
							if(function_exists('bcn_display'))
							{
							bcn_display();
							}?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
