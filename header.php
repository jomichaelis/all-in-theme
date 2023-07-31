<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package all-in-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/0b51d79416.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&family=Reem+Kufi+Ink&display=swap" rel="stylesheet">
	<!--<meta name="theme-color" content="#FF0ACE">-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'all-in-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar">
			<div class="container">
				<div class="nav-left">
					<div class="title-logo-wrapper">
						<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						?>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="All In">
							<img src="<?php echo $image[0]; ?>" alt="All In Logo" />
						</a>
					</div>
				</div>
				<div class="nav-right">
					<div class="menu-desktop-wrapper">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-desktop',
								'menu_id'        => 'menu-desktop',
								'menu_class'	 => 'menu-desktop',
								'link_after'	 => '<div class="submenu-chevron"><i class="fa-solid fa-chevron-down"></i></div>'
							)
						);
						?>
					</div>

					<div class="nav-button nav-instagram-link tooltip" id="instagram-link-button">
						<i class="fa-brands fa-instagram"></i>
						<!-- <span class="tooltiptext">zu Instagram</span> -->
					</div>
					<div class="nav-button nav-toggle-language tooltip" id="lang-toggle-button">
						<i class="fa-solid fa-book-open-reader"></i>
						<!-- <span class="tooltiptext">Sprache umstellen</span> -->
					</div>
					<div class="nav-button nav-toggle-menu tooltip" id="menu-toggle-button">
						<div class="icon-container">
							<i class="icon fa-solid fa-bars"></i>
							<i class="icon fa-solid fa-xmark menu-icon-hidden"></i>
						</div>
						<span class="tooltiptext">Menü</span>
					</div>
				</div>
			</div>

			<div class="mylangpopup" id="mylangpopup">
				<div class="content">
					<p>In welcher Sprache möchtest Du diese Seite gerne besuchen?</p>
					<div class="ilp-buttons-lang">
						<button class="ilp-button" id="ilp-button-site-easy">Leicht verständliche Sprache</button>
						<button class="ilp-button" id="ilp-button-site-normal">Deutsch</button>
					</div>
				</div>
			</div>

			<div class="mymenu" id="mymenu">
				<div class="content">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-mobile',
							'menu_id'        => 'menu-mobile',
							'menu_class'     => 'menu-mobile',
							// 'link_after'	 => '<div class="submenu-chevron"><i class="fa-solid fa-chevron-right"></i></div>'
						)
					);
					?>
				</div>
			</div>
		</nav>		
	</header><!-- #masthead -->
